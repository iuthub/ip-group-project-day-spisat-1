@extends('layouts.master')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Rooms list
  </h1>
  <form method="post" action="{{ route('paymentDetails') }}">
    @csrf

    <input type="submit" value="submit">
  </form>
</div>

@endsection