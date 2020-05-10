@extends('layouts.admin_layout')

@section('content')
<div class="window">
<div class="main">
  <h1 class="titleName">
    Edit room type
  </h1>
  <form method="post" action="{{ route('handleEditRoomType') }}">
    @csrf
    <p>
      Type: <input type="text" name="type" value="{{ $room_type->type }}">
    </p>
    <p>
      Price per night: <input type="text" name="price_per_night" value="{{ $room_type->price_per_night }}">
    </p>
    <p>
      Room capacity: <input type="text" name="room_capacity" value="{{ $room_type->room_capacity }}">
    </p>
    <p>
      Area: <input type="text" name="area" value="{{ $room_type->area }}">
    </p>
    <p>
      Description:
      <textarea name="description" rows="5" cols="50">{{ $room_type->description }}</textarea>
    </p>
    <p>
      <input type="submit" value="Edit">
    </p>
    <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
  </form>
</div>
</div>


@endsection