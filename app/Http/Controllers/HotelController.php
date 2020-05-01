<?php

namespace App\Http\Controllers;

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

    public function postRooms() {
      return view('hotel.rooms');
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