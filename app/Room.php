<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function roomType () {
        return $this -> belongsTo('App\RoomType');
    }
}
