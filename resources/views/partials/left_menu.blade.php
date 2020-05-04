<?php 
if ($_SERVER["REQUEST_METHOD"] != "POST"){
  $now = new DateTime();
  $checkin = $now->add(new DateInterval('P1W'))->format('Y-m-d');

  {{-- $now = new DateTime(); --}}
  $checkout = $now->add(new DateInterval('P2W'))->format('Y-m-d');
}
?>
<div style="float: left; margin: 40px; border: 1px solid black">
  <form method="post" action="{{ route('rooms') }}">
    @csrf

    <p>From: <input type="date" name="checkin" value="{{ $checkin }}"></p>
    <p>To: <input type="date" name="checkout" value="{{ $checkout }}"></p>
    <p>Number of people: 
      <select name="number_of_guests">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </p>
    <p><input type="submit" value="Search"></p>
  </form>
</div>