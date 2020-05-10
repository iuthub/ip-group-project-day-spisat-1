@extends('layouts.admin_layout')

@section('content')


<div class="col-md-9">
  <div class="row mt-40">
    <div class="col-10"><h1 class="titleName">Admin room types</h1></div>
    <div class="col-2"><a class="btn btn-success" href="{{ route('adminAddRoomType') }}">Add room type</a></div>
  </div>
  <table class="table">
	  	<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Type</th>
		      <th scope="col">Price&nbsp;per&nbsp;night</th>
		      <th scope="col">Room capacity</th>
          <th scope="col">Area</th>
          <th scope="col">Description</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
		    </tr>
	  	</thead>
      <tbody>
      @foreach ($room_types as $room_type)

        <tr class="table">
          <th scope="row">{{ $room_type->id }}</th>
		      <td>{{ $room_type->type }}</td>
		      <td>{{ $room_type->price_per_night }}</td>
		      <td>{{ $room_type->room_capacity }}</td>
          <td>{{ $room_type->area }}</td>
          <td>{{ $room_type->description }}</td>
          <td>
            <form method="post" action="{{ route('editRoomType') }}">
              @csrf
              <input class="btn btn-outline-info" type="submit" value="Edit">
              <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
            </form>
          </td>
          <td>
            <form method="post" action="{{ route('deleteRoomType') }}">
              @csrf
              <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
              <input class="btn btn-outline-secondary" type="submit" value="Delete">
            </form>
          </td>
        </tr>

      @endforeach
      </tbody>
    </table>
   </div>




  

@endsection