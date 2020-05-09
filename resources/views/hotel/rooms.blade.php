@extends('layouts.master')

@section('content')
  
  <?php
  $i = 0;
  ?>
  	@foreach ($rooms as $key=>$room)
    <?php
      $oddOrEven = ($key % 2) === 0;
    ?>
    @if($oddOrEven)
      <div class="container" style="margin-top: 100px">
       <div class="row">
        <div class="col-md-6">
          <img class="photo" src="{{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}">
        </div>
        <div class="offset-md-1 col-md-4">
           @component('hotel.rooms_components.description')
            @slot('id')
              {{ $room->id }}
            @endslot
            @slot('name')
              {{ $room->roomType->type . ' ' . $room->name }}
            @endslot
            @slot('price')
              {{ $room->roomType->price_per_night }}
            @endslot
            @slot('checkin')
              {{ $checkin }}
            @endslot
            @slot('checkout')
              {{ $checkout }}
            @endslot
            @slot('number_of_guests')
              {{ $number_of_guests }}
            @endslot
            @slot('description')
              {{ $room->roomType->description }}
            @endslot
            @slot('image')
              {{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}
            @endslot
           @endcomponent
         
        </div>
       </div>
      </div>
    @else
      <div class="container" style="margin-top: 100px">
       <div class="row">
        
        <div class="offset-md-1 col-md-4">
         
           @component('hotel.rooms_components.description')
            @slot('id')
              {{ $room->id }}
            @endslot
            @slot('name')
              {{ $room->roomType->type . ' ' . $room->name }}
            @endslot
            @slot('price')
              {{ $room->roomType->price_per_night }}
            @endslot
            @slot('checkin')
              {{ $checkin }}
            @endslot
            @slot('checkout')
              {{ $checkout }}
            @endslot
            @slot('number_of_guests')
              {{ $number_of_guests }}
            @endslot
            @slot('description')
              {{ $room->roomType->description }}
            @endslot
            @slot('image')
              {{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}
            @endslot
           @endcomponent
         
        </div>
        <div class="col-md-6">
          <img class="photo" src="{{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}">
        </div>
       </div>
      </div>
    @endif
 	@endforeach
@endsection
