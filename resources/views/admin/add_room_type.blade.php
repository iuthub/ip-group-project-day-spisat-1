@extends('layouts.admin_layout')

@section('content')
<div class="col-md-9 mt-40">
<div class="main">
  <h1 class="titleName">
    Add room type
  </h1>
  <form method="post" action="{{ route('handleAddRoomType') }}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Type:</label> 
        
        <input class="form-control" type="text" name="type" placeholder="Type...">
         </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="">Price per night:</label> 
        <input class="form-control"  type="text" name="price_per_night" placeholder="Price...">
     </div>
    </div>
    
    
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Room capacity:</label> 
        <input class="form-control" type="text" name="room_capacity" placeholder="Capacity...">
     </div>
    </div>
    
    
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Area: </label> 
        <input class="form-control"  type="text" name="area" placeholder="Area...">
      </div>
    </div>
    
    
    <div class="form-row"> 
      <div class="form-group col-md-6">
        <label for="sel1">Description:</label> 
        <textarea class="form-control" name="description" rows="5" cols="50"></textarea>
     </div>
    </div>
    <p>
      <input class="btn btn-success" type="submit" value="Add">
    </p>
  </form>
</div>
</div>


  

@endsection