<?php

use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
            'type' => 'Family Studio',
            'price_per_night' => 1000,
            'room_capacity' => 4,
            'area' => 86
        ]);
        DB::table('room_types')->insert([
            'type' => 'Family 1 Bedroom',
            'price_per_night' => 760,
            'room_capacity' => 3,
            'area' => 71
        ]);
        DB::table('room_types')->insert([
            'type' => 'Premier Room',
            'price_per_night' => 616,
            'room_capacity' => 3,
            'area' => 44
        ]);
        DB::table('room_types')->insert([
            'type' => 'Deluxe Room',
            'price_per_night' => 580,
            'room_capacity' => 3,
            'area' => 39
        ]);
        DB::table('room_types')->insert([
            'type' => 'Club Room ',
            'price_per_night' => 760,
            'room_capacity' => 3,
            'area' => 44
        ]);
    }
}
