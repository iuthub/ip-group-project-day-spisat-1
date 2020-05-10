@extends('layouts.admin_layout')

@section('content')

<div class="col-md-9 mt-40">
<div class="main">
<h1 class="titleName">
Add room
</h1>
<div class="container">
<form method="post" action="{{ route('handleAddRoom') }}">
@csrf
<p>
Room Type: <input type="text" name="type" placeholder="Type...">
</p>
<p>
Price per Night: <input type="text" name="price_per_night" placeholder="Price...">
</p>
<p>
Room Capacity: <input type="text" name="room_capacity" placeholder="Capacity...">
</p>
<p>
Description: <textarea name="description" rows="5" cols="50"></textarea> 

   <p>
      <input type="submit" class="btn btn-success" value="Add">
    </p>
    </form>
</div>

  
   
</div>


</div>


  

@endsection