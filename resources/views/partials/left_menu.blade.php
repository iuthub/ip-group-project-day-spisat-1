<?php 
if ($_SERVER["REQUEST_METHOD"] != "POST"){
  $now = new DateTime();
  $checkin = $now->add(new DateInterval('P1W'))->format('Y-m-d');

  {{-- $now = new DateTime(); --}}
  $checkout = $now->add(new DateInterval('P2W'))->format('Y-m-d');
  $number_of_guests = "2";
}
?>
<div style="float: left; margin: 40px; border: 1px solid black">
  <form method="post" action="{{ route('rooms') }}">
    @csrf

    <p>From: <input type="date" name="checkin" value="{{ $checkin }}"></p>
    <p>To: <input type="date" name="checkout" value="{{ $checkout }}"></p>
    <p>Number of people: 
      <select name="number_of_guests">
        <option value="1" {{ ($number_of_guests == "1") ? "selected" : ""}}>1</option>
        <option value="2" {{ ($number_of_guests == "2") ? "selected" : "" }}>2</option>
        <option value="3" {{ ($number_of_guests == "3") ? "selected" : "" }}>3</option>
        <option value="4" {{ ($number_of_guests == "4") ? "selected" : "" }}>4</option>
      </select>
    </p>
    <p><input type="submit" value="Search"></p>
  </form>
</div>