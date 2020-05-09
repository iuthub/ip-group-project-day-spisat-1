<p class="fstyle text-40">{{ $name }}</p><br>
<p class="mstyle">Price per night:{{ $price }}</p>
<form method="post" action="{{ route('paymentDetails') }}">
@csrf
	<input type="text" hidden value="{{ $checkin }}" name="checkin">
	<input type="text" hidden value="{{ $checkout }}" name="checkout">
	<input type="text" hidden value="{{ $number_of_guests }}" name="number_of_guests">
	<input type="text" hidden value="{{ $id }}" name="room_id">
	<button  
		data-name="{{ $name }}" 
		data-price="{{ $price }}"
		data-description="{{ $description }}"
		data-image="{{ $image }}"
		type="button" 
		class="btn btn-success" 
		data-toggle="modal" 
		data-target="#roomsModal">
				More
	</button>
  <input type="submit" value="Select room" class="btn btn-success">
</form>