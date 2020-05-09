@extends('layouts.master')

@section('content')

@if($message = Session::get('success'))
  <h1>{{ $message }}</h1>
@endif
@if($messages = Session::get('errors'))
	<h1>{{ $messages->first('name', ':message') }}</h1>
	<h1>{{ $messages->first('email', ':message') }}</h1>
	<h1>{{ $messages->first('message', ':message') }}</h1>
@endif

<div class="main" style="border: 1px solid black; overflow: hidden; margin: 40px;">
  <form method="post" action="{{ route('sendEmail') }}">
    @csrf

    <p>Full name: <input type="text" required name="name"></p>
    <p>Email: <input type="email" required name="email"></p>
    <p>Feedback: <textarea required name="message"></textarea></p>
    <input type="submit">
  </form>
</div>

@endsection