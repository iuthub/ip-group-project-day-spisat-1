<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    public function roomType () {
        return $this->belongsTo('App\RoomType');
    }

    public function reservations() {
        return $this->hasMany('App\Reservations');
    }

    public static function availableRooms($checkin, $checkout) {
    	$roomsIds = DB::table('rooms')
    		->leftjoin('reservations', function ($join) use ($checkin, $checkout) {
            	$join->on('rooms.id', '=', 'reservations.room_id')
                  ->where(function($query) use ($checkin, $checkout) {
                    $query->where([
                      ['checkin', '<=' , $checkin],
                      ['checkout', '>=' , $checkout]
                    ])->orWhere([
                      ['checkin', '>=' , $checkin],
                      ['checkin', '<=' , $checkin]
                    ]);
                  });
            })
			->where('reservations.id', null)
			->select('rooms.*')
			->get()
			->toArray();
			$rooms = Room::hydrate($roomsIds);
        return $rooms;
    }
}
