@extends('layouts.admin_layout')

@section('content')

<div class="col-md-9">

<h1 class="titleName">
    Edit room type
  </h1>
 <div class="container"><form method="post" action="{{ route('handleAddRoomType') }}">
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
  </form></div>
   
  



</div>


  

@endsection