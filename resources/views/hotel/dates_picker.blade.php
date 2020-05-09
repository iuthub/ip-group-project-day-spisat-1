<?php

if ($_SERVER["REQUEST_METHOD"] != "POST"){
  $now = new DateTime();
  $checkin = $now->add(new DateInterval('P1W'))->format('Y-m-d');

  {{-- $now = new DateTime(); --}}
  $checkout = $now->add(new DateInterval('P2W'))->format('Y-m-d');
  $number_of_guests = "2";
}

?>
<form method="post" action="{{ route('rooms') }}">
             @csrf
  <div class="container booking">
    <div class="searchingrooms" style="background-color:#2C405B">
      <div class="row align-items-center">
     
        <div class="col">
          <div class="checkin">
            <label>Check In</label><br>
            <div class="input-group">
              <input type="date" class="form-control text-light bg-transparent" name="checkin" value="{{ $checkin }}">
            </div>                
          </div>
        </div>

        <div class="col">
          <div class="checkout">
            <label>Check Out</label>
            <div class="input-group">
              <input type="date" class="form-control text-light bg-transparent" name="checkout" value="{{ $checkout }}">
            </div>
          </div>
        </div>

        <div class="col">
          <div class="guestslist">
            <label>Guests</label>
            <select class="form-control text-light bg-transparent" name="number_of_guests">
              <option class="text-dark" value="1" {{ ($number_of_guests == "1") ? "selected" : ""}}>1</option>
              <option class="text-dark" value="2" {{ ($number_of_guests == "2") ? "selected" : "" }}>2</option>
              <option class="text-dark" value="3" {{ ($number_of_guests == "3") ? "selected" : "" }}>3</option>
              <option class="text-dark" value="4" {{ ($number_of_guests == "4") ? "selected" : "" }}>4</option>
            </select>
          </div>
        </div>

        <div class="col">
            <label>&nbsp;</label><br>
            <button type="submit" class="btn btn-success">Check Availability</button>
        </div>
        
      </div>
    </div>
  </div>
</form>