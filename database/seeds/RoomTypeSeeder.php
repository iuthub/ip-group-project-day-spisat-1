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
            'area' => 86,
            'description' => "86 sqm
            Extended furnished balcony
            Located on L2 to L3, facing the highway
            
            1 king size bed & 2 twin beds
            Fully stocked minibar
            42’’ interactive flatscreen TV
            Cable channels (free) and movies on demand (charges apply)
            Executive work desk
            In-room safe
            Complimentary high-speed Wi-Fi
            Iron and ironing board
            Shoe brush and shoe horn
            Breakfast is not included for this room type
            86 sqm
            Extended furnished balcony
            Located on L2 to L3, facing the highway
            
            Waffle bathrobes
            Hairdryer"
        ]);
        DB::table('room_types')->insert([
            'type' => 'Family 1 Bedroom',
            'price_per_night' => 760,
            'room_capacity' => 3,
            'area' => 71,
            'description' => "71 sqm
            1 king bed and 1 sofa bed
            Located on L3 to L7, facing the highway
            
            Separate living room
            Fully stocked minibar
            42’’ interactive flatscreen TV
            Cable channels (free) and movies on demand (charges apply)
            Executive work desk
            In-room safe
            Complimentary high-speed Wi-Fi
            Iron and ironing board
            Shoe brush and shoe horn
            Breakfast is not included for this room type
            71 sqm
            1 king bed and 1 sofa bed
            Located on L3 to L7, facing the highway
            
            Waffle bathrobes
            Hairdryer"
        ]);
        DB::table('room_types')->insert([
            'type' => 'Premier Room',
            'price_per_night' => 616,
            'room_capacity' => 3,
            'area' => 44,
            'description' => "Fully stocked minibar
            42’’ interactive flatscreen TV
            Cable channels (free) and movies on demand (charges apply)
            Executive work desk
            In-room safe
            Complimentary high-speed Wi-Fi
            Iron and ironing board
            Breakfast is not included for this room type unless the Bed and Breakfast offer has been selected
            44 sqm
            Lower Floor (L2 to L9, facing the highway or The Shoppes)
            
            Luxury bathroom amenities
            Waffle bathrobes
            Hairdryer
            Deep-soaking bathtub"
        ]);
        DB::table('room_types')->insert([
            'type' => 'Deluxe Room',
            'price_per_night' => 580,
            'room_capacity' => 3,
            'area' => 39,
            'description' => "Fully stocked minibar
            42’’ interactive flatscreen TV
            Cable channels (free) and movies on demand (charges apply)
            Executive work desk
            In-room safe
            Complimentary high-speed Wi-Fi
            Iron and ironing board
            Breakfast is not included for this room type unless the Bed and Breakfast offer has been selected
            39 sqm
            Lower Floor (L2 to L9, facing the highway or The Shoppes)

            Luxury bathroom amenities
            Waffle bathrobes
            Hairdryer
            Glass-enclosed shower"
        ]);
        DB::table('room_types')->insert([
            'type' => 'Club Room ',
            'price_per_night' => 760,
            'room_capacity' => 3,
            'area' => 44,
            'description' => "44 sqm
            Exclusive access to Club55 & complimentary breakfast
            Located on L46 to L49, facing gardens
            
            1 king size bed
            Fully stocked minibar
            Nespresso machine and gourmet tea selections
            42’’ interactive flatscreen TV
            Cable channels (free) and movies on demand (charges apply)
            Executive work desk
            In-room safe
            Complimentary high-speed Wi-Fi
            iPod/iPhone docking station with alarm and radio
            Iron and ironing board
            Shoe brush and shoe horn
            44 sqm
            Located on L46 to L49, facing gardens
            
            Waffle bathrobes
            Hairdryer"]);
    }
}
