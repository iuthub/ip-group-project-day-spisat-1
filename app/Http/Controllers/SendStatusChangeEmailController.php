<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendStatusChangeEmail;
use App\Reservation;
use App\User;

class SendStatusChangeEmailController extends Controller
{
    //
    const statuses = [
      '0' => 'new',
      '1' => 'cancelled',
      '2' => ''
    ];


    function send($id, $status) {
      $reservation = Reservation::find($id);      
      $user = User::find($reservation->user_id);
      $reservation->status = $status;
      $reservation->save();

      $data = [
        'status' => self::statuses[$status],
        'first_name' => $user->first_name,
        'last_name' => $user->last_name
      ];
      Mail::to($user->email)->send(new SendStatusChangeEmail($data));  
      
      return response()->json(['code'=>200]);
    }
}
