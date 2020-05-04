<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Room;
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
      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      $number_of_guests = $request->input('number_of_guests');

      return view('hotel.payment_details', [
        'checkin' => $checkin,
        'checkout' => $checkout,
        'number_of_guests' => $number_of_guests
      ]);
    }

    public function addPaymentDetails(Request $request) {
      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      $number_of_guests = $request->input('number_of_guests');

      $user = Auth::user();

      $reservation = new Reservation();      
      $reservation->room_id = 1;
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
      return view('admin.rooms');
    }

    public function getAdminAddRoom() {
      return view('admin.add_room');
    }

    public function getAdminUpdateStatus($id, $status) {
      $rsrv = Reservation::find($id);
      $rsrv->status = $status;
      $rsrv->save();
      return response()->json(['code'=>200]);
    }
}