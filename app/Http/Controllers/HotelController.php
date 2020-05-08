<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
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
      if(!Auth::check()) {
        return redirect()->route('login');
      }
      $reservations = Auth::user()->reservations;

      return view('hotel.reservations', ['reservations' => $reservations]);
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

      $id = $reservation->id;
      return response()->json(['success'=> 
        ['id' => $id],
        $this->validatePaymentDetails($request)
      ]);
    }

    public function validatePaymentDetails(Request $request) {
      $rules = [
        'first_name' => ['required', 'string', 'min:1', 'max:128'],
        'last_name' => ['required', 'string', 'min:1', 'max:128'],
        'card_number' => ['required', 'string', 'regex:/^\d{16}$/'],
        'cvc' => ['required', 'string', 'regex:/^\d{3}$/'],
        'phone' => ['required', 'string', 'regex:/^\+998-\d{2}-\d{7}$/'],
        'street' => ['required', 'string', 'max:128'],
        'city' => ['required', 'string', 'max:128'],
        'country' => ['required', 'string', 'max:128'],
        'postal_code' => ['required', 'string', 'regex:/^\d{7}$/'],
        'passport_number' => ['required', 'string', 'regex:/^[a-zA-Z]{2}\d{7}$/']
      ];

      $customMessages = [
        'card_number.regex' => 'The card number should contain 16 digits',
        'cvc.regex' => 'CVC is a 3-digit number on the back of your card',
        'phone.regex' => 'Phone number format is +998-**-*******',
        'postal_code.regex' => 'Postal code is a 7-digit number',
        'passport_number.regex' => 'Passport number should be in format AA1234567'
      ];
      $validation = Validator::make($request->all(), $rules, $customMessages);

      if ($validation->fails()) {
          return ['error'=>$validation->errors()->all()];
      }
    }

    public function confirmBooking($id) {
      // $checkin = $request->input('checkin');
      // $checkout = $request->input('checkout');
      // $room_id = $request->input('room_id');
      // $number_of_guests = $request->input('number_of_guests');
      
      

      // $reservation = new Reservation();      
      // $reservation->room_id = $room_id;
      // $reservation->checkin = $checkin;
      // $reservation->checkout = $checkout;
      // $reservation->number_of_guests = $number_of_guests;
      // $reservation->status = 0;

      // $payment_detail = new PaymentDetail();
      // $payment_detail->first_name = $request->input('first_name');
      // $payment_detail->last_name = $request->input('last_name');
      // $payment_detail->card_number = $request->input('card_number');
      // $payment_detail->cvc = $request->input('cvc');
      // $payment_detail->street = $request->input('street');
      // $payment_detail->city = $request->input('city');
      // $payment_detail->country = $request->input('country');
      // $payment_detail->postal_code = $request->input('postal_code');
      // $payment_detail->phone = $request->input('phone');
      // $payment_detail->passport_number = $request->input('passport_number');

      // return redirect()->route('confirmBooking');
      return view('hotel.booking_confirmation');
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
      $room->name = $request->input('name');
      $room->room_number = $request->input('room_number');
      $room->main_picture_name = $request->input('picture_name');
      $room->room_type_id = $request->input('room_type_id');

      $room->save();

      return redirect()->route('adminRooms');
    }

    public function getAdminAddRoom() {
      $room_types = RoomType::all();
      return view('admin.add_room', ['room_types' => $room_types]);
    }

    public function handleAddRoom(Request $request) {
      $room = new Room();
      $room->name = $request->input('name');
      $room->room_number = $request->input('room_number');
      $room->main_picture_name = $request->input('picture_name');
      $room->room_type_id = $request->input('room_type_id');

      $room->save();

      return redirect()->route('adminRooms');
    }

    public function getAdminUpdateStatus($id, $status) {
      $rsrv = Reservation::find($id);
      $rsrv->status = $status;
      $rsrv->save();
      return response()->json(['code'=>200]);
    }
}