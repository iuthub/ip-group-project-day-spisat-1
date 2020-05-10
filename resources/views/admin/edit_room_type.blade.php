@extends('layouts.admin_layout')

@section('content')
<div class="col-md-9 mt-40">
<div class="main">
  <h1 class="titleName">
    Edit room type
  </h1>
  <form method="post" action="{{ route('handleEditRoomType') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Type:</label> 
        
        <input class="form-control" type="text" name="type" value="{{ $room_type->type }}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Price per night:</label> 
        
        <input class="form-control" type="text" name="price_per_night" value="{{ $room_type->price_per_night }}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Room capacity:</label> 
        
        <input class="form-control" type="text" name="room_capacity" value="{{ $room_type->room_capacity }}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Area:</label> 
        
        <input class="form-control" type="text" name="area" value="{{ $room_type->area }}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Description:</label> 
        <textarea class="form-control" name="description" rows="5" cols="50">{{ $room_type->description }}</textarea>
      </div>
    </div>
    <p>
      <input class="btn btn-success" type="submit" value="Edit">
    </p>
    <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
  </form>
</div>
</div>


@endsection