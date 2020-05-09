@extends('layouts.cmaster')

@section('content')

@if($message = Session::get('success'))
  <h1>{{ $message }}</h1>
@endif
@if($messages = Session::get('errors'))
	<h1>{{ $messages->first('name', ':message') }}</h1>
	<h1>{{ $messages->first('email', ':message') }}</h1>
	<h1>{{ $messages->first('message', ':message') }}</h1>
@endif
<div class="container-fluid">
  

<div class="offset-md-3 col-md-6 window">
  <h2>Thank you for your order!</h2>
  <h3>Order #: {{ $reservation->id }} </h3>
  <dl class="row">
    <dt class="col-sm-3">Checkin</dt>
    <dd class="col-sm-9">{{ $reservation->checkin }}</dd>
  </dl>
  <dl class="row">
    <dt class="col-sm-3">Checkout</dt>
    <dd class="col-sm-9">{{ $reservation->checkout }}</dd>
  </dl>
  <dl class="row">
    <dt class="col-sm-3">Number of guests</dt>
    <dd class="col-sm-9">{{ $reservation->number_of_guests }}</dd>
  </dl>
  <dl class="row">
    <dt class="col-sm-3">Room</dt>
    <dd class="col-sm-9">{{ $reservation->room->roomType->type . " - " . $reservation->room->name }}</dd>
  </dl>
</div>
</div>
<script>
  $(document).ready(function(){
    $('.dropdown-toggle').dropdown()
  }); 
</script>
@endsection