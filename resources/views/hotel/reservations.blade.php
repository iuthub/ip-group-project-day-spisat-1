<?php
  $statuses = [
    "0" => "New",
    "1" => "Approved",
    "2" => "Denied"
  ]
?>

@extends('layouts.master')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>Reservations</h1>
  <table style="border: 1px solid black;">
    <tr>
      <th style="border: 1px solid black;">Name</th>
      <th style="border: 1px solid black;">Check-in date</th>
      <th style="border: 1px solid black;">Check-out date</th>
      <th style="border: 1px solid black;">Room name</th>
      <th style="border: 1px solid black;">Status</th>
      <th style="border: 1px solid black;">Actions</th>
    </tr>
    
    @foreach($reservations as $index => $reservation)
      <tr>
        <td style="border: 1px solid black;">{{ $reservation['first_name'] . " " . $reservation['last_name'] }}</td>
        <td style="border: 1px solid black;">{{ $reservation['check_in'] }}</td>
        <td style="border: 1px solid black;">{{ $reservation['check_out'] }}</td>
        <td style="border: 1px solid black;">{{ $reservation['room'] }}</td>
        <td style="border: 1px solid black;">{{ $statuses[$reservation['status']] }}</td>
        <td style="border: 1px solid black;">View</td>
      </tr>
    @endforeach

  </table>
</div>

@endsection