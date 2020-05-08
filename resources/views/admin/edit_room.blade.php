@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Edit room
  </h1>
  <form method="post" action="{{ route('handleEditRoom') }}">
    @csrf
    <p>
      Room name: <input type="text" name="name" value="{{ $room->name }}">
    </p>
    <p>
      Room number: <input type="text" name="room_number" value="{{ $room->room_number }}">
    </p>
    <p>
      Main picture name: <input type="text" name="picture_name" value="{{ $room->main_picture_name }}">
    </p>
    <p>
      Room type:
      <select name="room_type_id">
        @foreach ($room_types as $room_type)
          <option value="{{ $room_type->id }}" {{ ($room_type->id == $room->room_type_id) ? "selected" : ""}} >{{ $room_type->type }}</option>
        @endforeach
      </select>
    </p>
    <p>
      <input type="submit" value="Edit">
    </p>
    <input type="hidden" name="room_id" value="{{ $room->id }}">
  </form>
</div>

@endsection