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
            'password' => '$2y$10$1rV2gfuH.d.J/v3aVP7uveZ34yJufQYDRZMcEH8fSVdsvplD7zHyu',//admin
            'dob' => Carbon::createFromFormat('d-m-Y', '01-05-2020')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Vasya',
            'last_name' => 'Pupkin',
            'type' => 1,
            'email' => 'vasya@go.com',
            'username' => 'vasya',
            'password' => '$2y$10$tZ2E0e1m3UjOrXWhljrRke4XSSRoo0iEmHfLWvIC11HAuxhgDiife', //vasya123
            'dob' => Carbon::createFromFormat('d-m-Y', '08-03-1990')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Jack',
            'last_name' => 'Dickens',
            'type' => 1,
            'email' => 'jdickens@go.com',
            'username' => 'jackdickens',
            'password' => 'jackdickens123',
            'dob' => Carbon::createFromFormat('d-m-Y', '08-03-1990')
        ]);
        DB::table('users')->insert([
            'first_name' => 'Mary',
            'last_name' => 'Woo',
            'type' => 1,
            'email' => 'jwoo@go.com',
            'username' => 'marywoo',
            'password' => 'marywoo123',
            'dob' => Carbon::createFromFormat('d-m-Y', '08-03-1980')
        ]);
    }
}
