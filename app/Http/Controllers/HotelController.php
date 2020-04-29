<?php

namespace App\Http\Controllers;



class HotelController extends Controller
{
    public function getIndex() {
      return view('hotel.index');
    }

    public function getAdminIndex() {
      return view('admin.index');
    }
}