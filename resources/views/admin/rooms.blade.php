@extends('layouts.admin_layout')

@section('content')


<div class="col-md-9">
  <div class="row mt-40">
    <div class="col-10"><h1 class="titleName">Admin rooms</h1></div>
    <div class="col-2"><a class="btn btn-success" href="{{ route('adminAddRoom') }}">Add room</a></div>
  </div>
     
  <table class="table">
	  	<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Number</th>
		      <th scope="col">Type</th>
          <th scope="col">Main picture name</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th> 
		    </tr>
	  	</thead>
      <tbody>
      @foreach ($rooms as $room)

        <tr>
          <th scope="row">{{ $room->id }}</th>
		      <td>{{ $room->name }}</td>
		      <td>{{ $room->room_number }}</td>
		      <td>{{ $room->roomType->type }}</td>
          <td><img src="{{URL::asset('/uploads/images/rooms/' . $room->main_picture_name)}}" style="max-width: 200px"></td>
          <td>
            <form method="post" action="{{ route('editRoom') }}">
              @csrf
              <input class="btn btn-outline-info" type="submit" value="Edit">
              <input type="hidden" name="room_id" value="{{ $room->id }}">
            </form>
          </td>
          <td>
            <form method="post" action="{{ route('deleteRoom') }}">
              @csrf
              <input type="hidden" name="room_id" value="{{ $room->id }}">
              <input class="btn btn-outline-secondary" type="submit" value="Delete">

            </form>
          </td>
        </tr>

      @endforeach
      </tbody>
    </table>
  </div>


 
 
</div>

@endsection