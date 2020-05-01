<?php

use Illuminate\Database\Seeder;

class PaymentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_details')->insert([
            'reservation_id' => 1,
            'first_name' => 'Vasya',
            'last_name' => 'Pupkin',
            'card_number' => '1234567801230345',
            'cvc' => '046',
            'street' => '105  Overton Circle',
            'city' => 'LITTLE WALDINGFIELD',
            'country' => 'UK',
            'postal_code' => 1000007,
            'phone' => '+998-99-1234567',
            'passport_number' => 'AA1234567'            
        ]);
        DB::table('payment_details')->insert([
            'reservation_id' => 2,
            'first_name' => 'Jack',
            'last_name' => 'Dickens',
            'card_number' => '0234067801230345',
            'cvc' => '096',
            'street' => '107  Southend Avenue',
            'city' => 'BLADES',
            'country' => 'UK',
            'postal_code' => 2000007,
            'phone' => '+998-99-9034567',
            'passport_number' => 'BA1234567'            
        ]);

        DB::table('payment_details')->insert([
            'reservation_id' => 3,
            'first_name' => 'Mary',
            'last_name' => 'Woo',
            'card_number' => '0234067801230111',
            'cvc' => '016',
            'street' => '63  Lammas Street',
            'city' => 'GREAT BEALINGS',
            'country' => 'UK',
            'postal_code' => 2004007,
            'phone' => '+998-99-9034511',
            'passport_number' => 'CA1234567'            
        ]);
    }
}
