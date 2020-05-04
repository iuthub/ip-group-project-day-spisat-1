<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Room;
use App\Reservation;

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
      $rooms = Room::availableRooms($checkin, $checkout);
      return view('hotel.rooms', [
                  'rooms' => $rooms, 
                  'checkin' => $checkin,
                  'checkout' => $checkout
                ]);
    }

    public function postPaymentDetails(Request $request) {
      $checkin = $request->input('checkin');
      $checkout = $request->input('checkout');
      return view('hotel.payment_details', [
                  'checkin' => $checkin,
                  'checkout' => $checkout
                ]);
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