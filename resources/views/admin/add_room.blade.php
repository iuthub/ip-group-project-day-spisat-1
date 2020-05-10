@extends('layouts.admin_layout')

@section('content')
<div class="col-md-9 mt-40">
<div class="main">
  <h1 class="titleName">
    Add room
  </h1>
  <form method="post" action="{{ route('handleAddRoom') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Room name:</label> 
        
        <input class="form-control" type="text" name="name" placeholder="Name...">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Room number:</label> 
        <input class="form-control" type="text" name="room_number" placeholder="Number...">
      </div>
    </div>
    
    
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Main picture:</label> <br>
        <input type="file"  name="picture_name" placeholder="Picture name...">
      </div>
    </div>
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Room type:</label> 
        <select class="form-control" name="room_type_id">
          <option disabled selected>
            Select...
          </option>
          @foreach ($room_types as $room_type)
            <option value="{{ $room_type->id }}">{{ $room_type->type }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <p>
      <input class="btn btn-success" type="submit" value="Add">
    </p>
  </form>
</div>
</div>


@endsection