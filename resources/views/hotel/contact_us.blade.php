@extends('layouts.master')

@section('content')

@if($message = Session::get('success'))
  <h1>{{ $message }}</h1>
@endif

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <form method="post" action="{{ route('sendEmail') }}">
    @csrf

    <p>Full name: <input type="text" name="name"></p>
    <p>Email: <input type="text" name="email"></p>
    <p>Feedback: <textarea name="message"></textarea></p>
    <input type="submit">
  </form>
</div>

@endsection