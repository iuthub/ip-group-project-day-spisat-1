<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'type' => 0,
            'email' => 'admin@go.com',
            'username' => 'admin',
            'password' => 'admin',
            'dob' => Carbon::createFromFormat('d-m-Y', '01-05-2020')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Vasya',
            'last_name' => 'Pupkin',
            'type' => 1,
            'email' => 'vasya@go.com',
            'username' => 'vasya',
            'password' => 'pupkin123',
            'dob' => Carbon::createFromFormat('d-m-Y', '08-03-1990')
        ]);
    }
}
