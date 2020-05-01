<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function room () {
        return $this->belongsTo('App\Room');
    }

    public function paymentDetail() {
        return $this->hasOne('App\PaymentDetails');
    }
}
