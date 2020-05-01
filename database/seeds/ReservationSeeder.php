<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'room_id' => 1,
            'user_id' => 2,
            'checkin' => Carbon::createFromFormat('d-m-Y', '01-06-2020'),
            'checkout' => Carbon::createFromFormat('d-m-Y', '03-06-2020'),
            'number_of_guests' => 2,
            'status' => 0,
        ]);
        DB::table('reservations')->insert([
            'room_id' => 2,
            'user_id' => 3,
            'checkin' => Carbon::createFromFormat('d-m-Y', '01-06-2020'),
            'checkout' => Carbon::createFromFormat('d-m-Y', '03-06-2020'),
            'number_of_guests' => 3,
            'status' => 0,
        ]);
        DB::table('reservations')->insert([
            'room_id' => 3,
            'user_id' => 4,
            'checkin' => Carbon::createFromFormat('d-m-Y', '01-06-2020'),
            'checkout' => Carbon::createFromFormat('d-m-Y', '05-06-2020'),
            'number_of_guests' => 3,
            'status' => 0,
        ]);
    }
}
