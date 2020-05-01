@extends('layouts.admin_layout')

@section('content')

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <h1>
    Admin's main page
  </h1>
  <a href="{{ route('adminRooms') }}"><button>Show rooms</button></a>
</div>

@endsection