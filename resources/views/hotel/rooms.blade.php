@extends('layouts.rmaster')

@section('content')
<div class="main">
<div class="container-fluid">
<div class="row">
<div class="offset-md-1 col-md-5">
  <h1 class="fstyle pageName">
    Rooms list
  </h1><br>
  <?php
  $i = 0;
  ?>
  <ul>
  	@foreach ($rooms as $room)
    <?php
  $container_class = ($i % 2) == 0 ? 'class1' : 'class2'
    ?>
    <div class="{{ $container_class }}">
      <div class="container-fluid class1">
       <div class="row">
        <div class="offset-md-1 col-md-3">
         <p class="photo">{{ $room->main_picture_name }}</p>
        </div>
        <div class="offset-md-1 col-md-5 fstyle1">
         <ul>
           <p class="fstyle">{{ $room->roomType->type }} - {{ $room->name }}</p><br>
           <p class="mstyle">Price per night:{{ $room->roomType->price_per_night }}</p>
            <form method="post" action="{{ route('paymentDetails') }}">
            @csrf
              <input type="text" hidden value="{{ $checkin }}" name="checkin">
              <input type="text" hidden value="{{ $checkout }}" name="checkout">
              <input type="text" hidden value="{{ $number_of_guests }}" name="number_of_guests">
              <input type="text" hidden value="{{ $room->id }}" name="room_id">
              <input type="submit" value="order">
            </form>
         </ul>
        </div>
       </div>
      </div>
    
      <div class="container class2">
       <div class="row">
        <div class="offset-md-1 col-md-5">
         <ul> 
          <p class="fstyle">{{ $room->roomType->type }} - {{ $room->name }}</p><br>
          <p class="mstyle">Price per night:{{ $room->roomType->price_per_night }}</p>
           <form method="post" action="{{ route('paymentDetails') }}">
           @csrf
            <input type="text" hidden value="{{ $checkin }}" name="checkin">
            <input type="text" hidden value="{{ $checkout }}" name="checkout">
            <input type="text" hidden value="{{ $number_of_guests }}" name="number_of_guests">
            <input type="text" hidden value="{{ $room->id }}" name="room_id">
            <input type="submit" value="order">
           </form>       
        </ul>          
        </div>
        <div class="offset-md-2 col-md-4">
          <p class="double-photo">{{ $room->main_picture_name }}</p>
         </div>
       </div>      
      </div>
 
   	@endforeach
    </ul>
   </div>
  </div>
  </div> 
</div>

@endsection