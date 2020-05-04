@extends('layouts.master')

@section('content')
<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Rooms list
  </h1>
  <ul>
  	@foreach ($rooms as $room)
  	<li>
  		<p>{{ $room->roomType->type }} - {{ $room->name }}</p>
  		<p>{{ $room->main_picture_name }}</p>
  		<p>{{ $room->roomType->price_per_night }}</p>
  	</li>
  	@endforeach
  </ul>
  <form method="post" action="{{ route('paymentDetails') }}">
    @csrf
    <input type="text" hidden value="{{ $checkin }}" name="checkin">
    <input type="text" hidden value="{{ $checkout }}" name="checkout">
    <input type="submit" value="submit">
  </form>
</div>

@endsection