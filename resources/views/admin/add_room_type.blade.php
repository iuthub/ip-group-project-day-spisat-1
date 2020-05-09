@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Edit room type
  </h1>
  <form method="post" action="{{ route('handleAddRoomType') }}">
    @csrf
    <p>
      Type: <input type="text" name="type" placeholder="Type...">
    </p>
    <p>
      Price per night: <input type="text" name="price_per_night" placeholder="Price...">
    </p>
    <p>
      Room capacity: <input type="text" name="room_capacity" placeholder="Capacity...">
    </p>
    <p>
      Area: <input type="text" name="area" placeholder="Area...">
    </p>
    <p>
      Description:
      <textarea name="description" rows="5" cols="50"></textarea>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>
</div>

@endsection