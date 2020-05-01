<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name' => 'Lower Floor',
            'room_type_id' => 1,
            'room_number' => 1001,
            'main_picture_name' => '1001.jpg'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Garden View',
            'room_type_id' => 2,
            'room_number' => 4001,
            'main_picture_name' => '4001.jpg'
        ]);
        DB::table('rooms')->insert([
            'name' => 'City View',
            'room_type_id' => 3,
            'room_number' => 6001,
            'main_picture_name' => '6001.jpg'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Garden View',
            'room_type_id' => 2,
            'room_number' => 2001,
            'main_picture_name' => '2001.jpg'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Garden View',
            'room_type_id' => 2,
            'room_number' => 1002,
            'main_picture_name' => '1002.jpg'
        ]);
    }
}
