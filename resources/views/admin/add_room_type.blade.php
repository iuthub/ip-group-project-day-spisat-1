@extends('layouts.admin_layout')

@section('content')

<div class="col-md-9 mt-40">
<div class="main">
<h1 class="titleName">
    Edit room type
  </h1>
 <div class="container">
 <form method="post" action="{{ route('handleAddRoomType') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
       <label for="">Room Type:</label>
       <input type="text" class="form-control" name="type" value="{{ $room_type ?? 'type' }}">
     </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
       <label for="">Price per Night:</label>
       <input type="text" class="form-control" name="price_per_night" value="{{ $room_type ?? 'price_per_night' }}">
     </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
       <label for="">Room Capacity:</label>
       <input type="text" class="form-control" name="room_capacity" value="{{ $room_type ?? 'room_capacity' }}">
     </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
       <label for="">Room Area:</label>
       <input type="text" class="form-control" name="area" value="{{ $room_type ?? 'area' }}">
     </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
       <label for="">Description:</label>
       <textarea type="text" class="form-control" name="description" rows="5" cols="50">{{ $room_type ?? 'description' }}</textarea>
     </div>
    </div>

   <p>
      <input type="submit" class="btn btn-success" value="Add">
    </p>
    <input type="hidden" name="room_type_id" value="{{ $room_type ?? 'id' }}">
  </form>
  </div>
   
</div>


</div>


  

@endsection