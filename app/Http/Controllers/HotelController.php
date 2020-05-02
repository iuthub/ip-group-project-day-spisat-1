<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Room;

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

    public function postPaymentDetails() {
      return view('hotel.payment_details');
    }

    public function getAdminIndex() {
      return view('admin.index');
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
}