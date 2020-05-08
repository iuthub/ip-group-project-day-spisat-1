@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Add room
  </h1>
  <form method="post" action="{{ route('handleAddRoom') }}">
    @csrf
    <p>
      Room name: <input type="text" name="name" placeholder="Name...">
    </p>
    <p>
      Room number: <input type="text" name="room_number" placeholder="Number...">
    </p>
    <p>
      Main picture name: <input type="text" name="picture_name" placeholder="Picture name...">
    </p>
    <p>
      Room type:
      <select name="room_type_id">
        <option disabled selected>
          Select...
        </option>
        @foreach ($room_types as $room_type)
          <option value="{{ $room_type->id }}">{{ $room_type->type }}</option>
        @endforeach
      </select>
    </p>
    <p>
      <input type="submit" value="Add">
    </p>
  </form>
</div>

@endsection