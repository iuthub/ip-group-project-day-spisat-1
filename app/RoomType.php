<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public function rooms() {
        return $this->hasMany('App\Room');
    }
}
