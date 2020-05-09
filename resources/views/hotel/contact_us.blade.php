@extends('layouts.cmaster')

@section('content')

@if($message = Session::get('success'))
  <h1>{{ $message }}</h1>
@endif
@if($messages = Session::get('errors'))
	<h1>{{ $messages->first('name', ':message') }}</h1>
	<h1>{{ $messages->first('email', ':message') }}</h1>
	<h1>{{ $messages->first('message', ':message') }}</h1>
@endif

<div class="main">
<div class="container-fluid contactUs">
  <div class="row">
    <div class="offset-md-3 col-md-6 window">
    <form method="post" action="{{ route('sendEmail') }}">
    @csrf
    <p class="text">In case if you want to contact us, you can send your message in the form provided below.</p><br>
    <p>Full Name: <input type="text" class="form-control" required name="name"></p>
    <p>Email: <input type="email" class="form-control"required name="email" placeholder="Enter email"></p>
    <small id="safemsg" class="form-text text-muted">We'll never share your email address with anyone else.</small>
    <p>Message: <textarea class="form-control" required name="message"></textarea></p>
    <button type="submit" class="btn btn-success">Send Message</button>
  </form>
    </div>
  </div>
</div>
</div>

@endsection