@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Admin room types
  </h1>
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

        <tr class="table-primary">
          <th scope="row">{{ $room_type->id }}</th>
		      <td>{{ $room_type->type }}</td>
		      <td>{{ $room_type->price_per_night }}</td>
		      <td>{{ $room_type->room_capacity }}</td>
          <td>{{ $room_type->area }}</td>
          <td>{{ $room_type->description }}</td>
          <td>
            <form method="post" action="{{ route('editRoomType') }}">
              @csrf
              <input type="submit" value="Edit">
              <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
            </form>
          </td>
          <td>
            <form method="post" action="{{ route('deleteRoomType') }}">
              @csrf
              <input type="hidden" name="room_type_id" value="{{ $room_type->id }}">
              <input type="submit" value="Delete">
            </form>
          </td>
        </tr>

      @endforeach
      </tbody>
    </table>
  <a href="{{ route('adminAddRoomType') }}"><button>Add room type</button></a>
</div>

@endsection