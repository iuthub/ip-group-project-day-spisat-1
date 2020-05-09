@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Admin rooms
  </h1>
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
          <td>{{ $room->main_picture_name }}</td>
          <td>
            <form method="post" action="{{ route('editRoom') }}">
              @csrf
              <input type="submit" value="Edit">
              <input type="hidden" name="room_id" value="{{ $room->id }}">
            </form>
          </td>
          <td>
            <form method="post" action="{{ route('deleteRoom') }}">
              @csrf
              <input type="hidden" name="room_id" value="{{ $room->id }}">
              <input type="submit" value="Delete">
            </form>
          </td>
        </tr>

      @endforeach
      </tbody>
    </table>
  <a href="{{ route('adminAddRoom') }}"><button>Add room</button></a>
</div>

@endsection