<?php

namespace App\Http\Controllers;

class HotelController extends Controller
{
  const reservations = [
    [
      "first_name" => "Xavier",
      "last_name" => "Hernandez",
      "check_in" => "30/04/2020",
      "check_out" => "02/05/2020",
      "room" => "Guest Family",
      "status" => "0"
    ],
    [
      "first_name" => "Wayne",
      "last_name" => "Gretzky",
      "check_in" => "28/04/2020",
      "check_out" => "01/05/2020",
      "room" => "Resort Deluxe",
      "status" => "2"
    ],
    [
      "first_name" => "Giannis",
      "last_name" => "Antetokounmpo",
      "check_in" => "29/04/2020",
      "check_out" => "03/05/2020",
      "room" => "Resort Basic",
      "status" => "1"
    ]
  ];    

    public function getIndex() {
      return view('hotel.index');
    }

    public function getReservations() {
      return view('hotel.reservations', ['reservations' => self::reservations]);
    }

    public function getAdminIndex() {
      return view('admin.index');
    }

    public function getAdminReservations() {
      return view('admin.reservations', ['reservations' => self::reservations]);
    }
}