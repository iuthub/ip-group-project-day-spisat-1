@extends('layouts.admin_layout')

@section('content')
<div class="col-md-9 mt-40">
<div class="main">

<h1 class="titleName">
Add room
</h1>

        <p>
      <img src="{{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}" style="max-width: 700px"><br>
      <input class="btn" type="file" name="picture_name" value="{{ $room->main_picture_name }}">
    </p>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Room name:</label> 
        
        <input class="form-control" type="text" name="name" value="{{ $room->name }}">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Room number:</label> 
        <input class="form-control" type="text" name="room_number" value="{{ $room->room_number }}">
      </div>
    </div>
    
    
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Room type:</label>
        <select class="form-control" name="room_type_id">
        @foreach ($room_types as $room_type)
          <option value="{{ $room_type->id }}">{{ $room_type->type }}</option>
        @endforeach
      </select>
    </p>
    <p>
      <input type="submit" class="btn btn-success" value="Add">
    </p>
    <input type="hidden" name="room_id" value="{{ $room->id }}">
  </form>
</div>
</div>
 

 
@endsection