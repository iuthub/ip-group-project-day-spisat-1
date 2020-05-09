@extends('layouts.master')

@section('content')
<?php

if ($_SERVER["REQUEST_METHOD"] != "POST"){
  $now = new DateTime();
  $checkin = $now->add(new DateInterval('P1W'))->format('Y-m-d');

  {{-- $now = new DateTime(); --}}
  $checkout = $now->add(new DateInterval('P2W'))->format('Y-m-d');
  $number_of_guests = "2";
}

?>

<div class="main">
<form method="post" action="{{ route('rooms') }}">
             @csrf
<div class="container booking">
      <div class="searchingrooms" style="background-color:#2C405B">
        <div class="row align-items-center">
       
          <div class="col">
            <div class="checkin">
              <ul>              
                <label>Check In</label><br>
                <div class="input-group">
                <input type="date" class="form-control text-light bg-transparent" name="checkin" value="{{ $checkin }}">
                </div>                
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="checkout">
              <ul>
                <label>Check Out</label>
                <div class="input-group">
                <input type="date" class="form-control text-light bg-transparent" name="checkout" value="{{ $checkout }}">
                </div>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="guestslist">
              <ul>
                <label>Guests</label>
                <select class="form-control text-light bg-transparent" name="number_of_guests">
                  <option class="text-dark" value="1" {{ ($number_of_guests == "1") ? "selected" : ""}}>1</option>
                  <option class="text-dark" value="2" {{ ($number_of_guests == "2") ? "selected" : "" }}>2</option>
                  <option class="text-dark" value="3" {{ ($number_of_guests == "3") ? "selected" : "" }}>3</option>
                  <option class="text-dark" value="4" {{ ($number_of_guests == "4") ? "selected" : "" }}>4</option>
                </select>
              </ul>
            </div>
          </div>

          <div class="col">
            <div class="checkrooms">
            <button type="submit" class="btn btn-success">Check Availability</button>
            </div>
          </div>
          
        </div>
      </div>
      </form>
    </div>
  </section>

  <div class="offset-md-5 col-md-2 about">
    <img src="./images/AboutUs.svg" alt="About Us">
  </div>
  <div class="offset-md-2 col-md-8 atxt">
    <p class="text-center">“The Chemodan” Hotel is one of the best places where you can take a rest after your flight or
      meeting. Access to the high-speed Internet will give you ability to be in contact with your family, friends, and
      colleagues. Delicious dishes in our restaurant and an outdoor pool will not leave you indifferent, while various
      entertainment clubs will help you to have fun. For those who came with families our hotel have special family
      rooms and playground for little ones.
    </p>
  </div>
  <div class="offset-md-4 col-md-4 btxt">
    <p class="text-center">Enjoy your time in our hotel!</p>
  </div>
</div>

@endsection