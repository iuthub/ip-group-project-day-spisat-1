@extends('layouts.admin_layout')
<?php 
use App\ReservationStatus;
use App\PaymentDetail;
use Illuminate\Support\Carbon;
?>
@section('content')

<div class="col-md-9 mt-40">
  	<h1 class="titleName">Admin: Reservations</h1>
  
    <table class="table">
	  	<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Room</th>
		      <th scope="col">Check-in</th>
		      <th scope="col">Check-out</th>
		      <th scope="col">Status</th>
		      <th scope="col"># of days</th>
		      <th scope="col">Total cost</th>
		      <th scope="col"></th>
		    </tr>
	  	</thead>
	  <tbody>
	  	@foreach ($reservations as $reservation)
	  	<?php
	  	$payment_detail = $reservation->paymentDetail;
	  	$id = $reservation->id;
		$name = $payment_detail->first_name . " " . $payment_detail->last_name;
		$room = $reservation->room->roomType->type . " - " . $reservation->room->name;
		$status = $reservation->status;
		$checkin = $reservation->checkin;
		$checkout = $reservation->checkout;
		$checkin_parsed = Carbon::parse($checkin);
		$checkout_parsed = Carbon::parse($checkout);
		$diff = $checkin_parsed->diff($checkout_parsed)->d;
		$total_cost = $reservation->room->roomType->price_per_night * $diff;
		
		$status_utils = ['name' => '', 'class' => ''];
		if($status == ReservationStatus::NewReservation) {
			$status_utils = ['name' => 'New', 'class' => 'primary'];
		} elseif ($status == ReservationStatus::Cancelled) {
			$status_utils = ['name' => 'Cancelled', 'class' => 'secondary'];
		} elseif ($status == ReservationStatus::Confirmed) {
			$status_utils = ['name' => 'Confirmed', 'class' => 'success'];
		}

		$number_of_guests = $reservation->number_of_guests;
		$card_number = substr($payment_detail->card_number, -4);
		$street = $payment_detail->street; 
		$city = $payment_detail->city; 
		$country = $payment_detail->country; 
		$postal_code = $payment_detail->postal_code; 
		$phone = $payment_detail->phone_number; 
		$passport = $payment_detail->passport_number; 
	  	?>
	    <tr id="rsrv-{{ $id }}" class="table-{{ $status_utils['class'] }}">
			<th scope="row">{{ $id }}</th>
			<td>{{ $name }}</td>
			<td>{{ $room }}</td>
			<td>{{ $checkin }}</td>
			<td>{{ $checkout }}</td>
	      	<td class="status-name">{{ $status_utils['name'] }}</td>
			<td>{{ $diff }}</td>
			<td>{{ $total_cost }}</td>
	      	<td><!-- Button trigger modal -->
				<button 
					id="view-{{ $id }}" 
					data-id="{{ $id }}" 
					data-name="{{ $name }}" 
					data-room="{{ $room }}"
					data-checkin="{{ $checkin }}"
					data-checkout="{{ $checkout }}"
					data-status="{{ $status_utils['name'] }}"
					data-status-value="{{ $status }}"
					data-number-of-guests="{{ $number_of_guests }}"
					data-card-number="{{ $card_number }}"
					data-street="{{ $street }}"
					data-city="{{ $city }}"
					data-country="{{ $country }}"
					data-postal-code="{{ $postal_code }}"
					data-phone="{{ $phone }}"
					data-passport="{{ $passport }}"
					type="button" 
					class="btn btn-info" 
					data-toggle="modal" 
					data-target="#reservationModal">
		  				View Details
				</button>
			</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>
@component('partials.modal_rsrv')
	@slot('isAdminModal')
	true
	@endslot
@endcomponent

@endsection