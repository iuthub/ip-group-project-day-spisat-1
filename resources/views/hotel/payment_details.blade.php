@extends('layouts.master')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <form method="post" action="{{ route('addPaymentDetails') }}">
    @csrf

    <p>First name: <input type="text" name="first_name"/></p>
    <p>Last name: <input type="text" name="last_name"/></p>
    <p>Card number: <input type="text" name="card_number"/></p>
    <p>CVC: <input type="text" name="cvc"/></p>
    <p>Street: <input type="text" name="street"/></p>
    <p>City: <input type="text" name="city"/></p>
    <p>Country: <input type="text" name="country"/></p>
    <p>Postal code: <input type="text" name="postal_code"/></p>
    <p>Phone: <input type="text" name="phone"/></p>
    <p>Passport number: <input type="text" name="passport_number"/></p>

    <input type="hidden" name="checkin" value="{{ $checkin }}">
    <input type="hidden" name="checkout" value="{{ $checkout }}">
    <input type="hidden" name="number_of_guests" value="{{ $number_of_guests }}">

    <input type="submit">
  </form>
</div>

@endsection