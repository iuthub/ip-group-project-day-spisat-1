@extends('layouts.admin_layout')

@section('content')
<div class="window">
<div class="main">
  <h1 class="titleName">
    Edit room
  </h1>
  <form method="post" action="{{ route('handleEditRoom') }}" enctype="multipart/form-data">
    @csrf
    <p>
      Main picture: 
      <img src="{{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}" style="max-width: 700px">
      <input type="file" name="picture_name" value="{{ $room->main_picture_name }}">
    </p>
    <p>
      Room name: <input type="text" name="name" value="{{ $room->name }}">
    </p>
    <p>
      Room number: <input type="text" name="room_number" value="{{ $room->room_number }}">
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
</div>


@endsection