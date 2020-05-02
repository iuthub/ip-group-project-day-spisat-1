<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    public function room () {
        return $this->belongsTo('App\Reservation');
    }
}
