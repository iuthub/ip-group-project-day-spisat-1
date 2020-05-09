<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Room;
use App\RoomType;
use App\Reservation;
use App\User;
use App\PaymentDetail;


class HotelController extends Controller
{

    public function getIndex() {
      return view('hotel.index');
    }

    public function getReservations() {
      return view('hotel.reservations');
    }

    public function getContactUs() {
      return view('hotel.contact_us');
    }

    public function postRooms(Request $request) {
      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      $number_of_guests = $request->input('number_of_guests');

      $rooms = Room::availableRooms($checkin, $checkout);
      return view('hotel.rooms', [
                  'rooms' => $rooms, 
                  'checkin' => $checkin,
                  'checkout' => $checkout,
                  'number_of_guests' => $number_of_guests
                ]);
    }

    public function postPaymentDetails(Request $request) {
      if(!Auth::check()) {
        return redirect()->route('login');
      }

      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      $room_id = $request->input('room_id');
      $number_of_guests = $request->input('number_of_guests');

      return view('hotel.payment_details', [
        'checkin' => $checkin,
        'checkout' => $checkout,
        'room_id' => $room_id,
        'number_of_guests' => $number_of_guests
      ]);
    }

    public function addPaymentDetails(Request $request) {
      $validation = $this->validate($request, [
        'phone' => ['required', 'string', 'regex:/^\+998-\d{2}-\d{7}$/'],
        'first_name' => ['required', 'string', 'min:2', 'max:255'],
        'last_name' => ['required', 'string', 'min:2', 'max:255'],
        'message' => ['required', 'string', 'min:5']
      ]);
      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      $room_id = $request->input('room_id');
      $number_of_guests = $request->input('number_of_guests');

      $user = Auth::user();

      $reservation = new Reservation();      
      $reservation->room_id = $room_id;
      $reservation->checkin = $checkin;
      $reservation->checkout = $checkout;
      $reservation->number_of_guests = $number_of_guests;
      $reservation->status = 0;

      $payment_detail = new PaymentDetail();
      $payment_detail->first_name = $request->input('first_name');
      $payment_detail->last_name = $request->input('last_name');
      $payment_detail->card_number = $request->input('card_number');
      $payment_detail->cvc = $request->input('cvc');
      $payment_detail->street = $request->input('street');
      $payment_detail->city = $request->input('city');
      $payment_detail->country = $request->input('country');
      $payment_detail->postal_code = $request->input('postal_code');
      $payment_detail->phone = $request->input('phone');
      $payment_detail->passport_number = $request->input('passport_number');

      $user->reservations()->save($reservation);
      $reservation->paymentDetail()->save($payment_detail);

      return redirect()->route('index');
    }

    public function getAdminIndex() {
      $reservations = Reservation::all();
      return view('admin.index', ['reservations' => $reservations]);
    }

    public function getAdminReservations() {
      return view('admin.reservations');
    }

    public function getAdminRooms() {
      $rooms = Room::all();
      return view('admin.rooms', ['rooms' => $rooms]);
    }

    public function deleteRoom(Request $request) {
      $room = Room::find($request->input('room_id'));
      $room->delete();

      return redirect()->route('adminRooms');
    }

    public function postEditRoom(Request $request) {
      $room = Room::find($request->input('room_id'));
      $room_types = RoomType::all();
      return view('admin.edit_room', ['room' => $room, 'room_types' => $room_types]);
    }

    public function handleEditRoom(Request $request) {
      $room = Room::find($request->input('room_id'));
      $room_types = RoomType::all();
      $roomNumberValidation = "required";
      if($request->input('room_number') != $room->room_number){
        $roomNumberValidation = 'required|unique:App\Room';
      }
      $validation = Validator::make($request->all(), [
        'room_number' => $roomNumberValidation,
        'picture_name' => 'image|mimes:jpeg,png,jpg,gif|max:10000'
      ]);      
      if($validation->passes()){
        $room->name = $request->input('name');
        $room->room_number = $request->input('room_number');
        $room->room_type_id = $request->input('room_type_id');
        
        if ($request->has('picture_name')) {
          $folder = public_path().'/uploads/images/rooms/';
          $oldImageName = $room->main_picture_name;
          if (File::exists($folder.'/'.$oldImageName)) {
              File::delete($folder.'/'.$oldImageName);
          }
          $newImageName = time() . '.' . $request->file('picture_name')->getClientOriginalExtension();
          
          $request->file('picture_name')->move($folder, $newImageName);
          $room->main_picture_name = $newImageName;
        }
        $room->room_type_id = $request->input('room_type_id');

        $room->save();
      } else {
        return view('admin.edit_room', [
          'room' => $room, 
          'room_types' => $room_types,
          'errors' => $validation->errors()]
        );
      }
      return redirect()->route('adminRooms')->with(['info' => 'Room #'.$room->room_number.'has been updated!']);
    }

    public function getAdminAddRoom() {
      $room_types = RoomType::all();
      return view('admin.add_room', ['room_types' => $room_types]);
    }

    public function handleAddRoom(Request $request) {

      $validation = Validator::make($request->all(), [
        'room_number' => 'required|unique:App\Room',
        'picture_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000'
      ]);      
     
      if($validation->passes()){
        $room = new Room();
        $room->name = $request->input('name');
        $room->room_number = $request->input('room_number');
        if ($request->has('picture_name')) {
          $imageName = time() . '.' . $request->file('picture_name')->getClientOriginalExtension();
          $folder = public_path().'/uploads/images/rooms/';
          $request->file('picture_name')->move($folder, $imageName);
          $room->main_picture_name = $imageName;
        }
        $room->room_type_id = $request->input('room_type_id');

        $room->save();
      } else {
        $room_types = RoomType::all();
        return view('admin.add_room', [
          'room_types' => $room_types,
          'errors' => $validation->errors()]
        );
      }
      return redirect()->route('adminRooms');
    }

    public function getAdminUpdateStatus($id, $status) {
      $rsrv = Reservation::find($id);
      $rsrv->status = $status;
      $rsrv->save();
      return response()->json(['code'=>200]);
    }
}