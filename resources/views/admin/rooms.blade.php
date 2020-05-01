@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Rooms list
  </h1>
  <a href="{{ route('adminAddRoom') }}"><button>Add room</button></a>
</div>

@endsection