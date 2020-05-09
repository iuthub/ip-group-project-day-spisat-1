<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index() {
      return view('hotel.contact_us');
    }

    function send(Request $request) {
      $validation = $this->validate($request, [
        'name' => ['required', 'string', 'max:255', 'regex:/[a-zA-Z]{5, }/'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'message' => ['required', 'string', 'min:5']
      ]);

      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
      ];

      Mail::to('thechemodanhotel@gmail.com')->send(new SendMail($data));
      return back()->with([
        'success' => 'Thanks for your feedback!',
        'error' => $validation
      ]);
    }
}
