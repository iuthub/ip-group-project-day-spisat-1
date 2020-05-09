@if(count($errors->all())>0)
	<div class="alert alert-danger" role="alert">
		@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
@endif

@if(Session::get('error') != null)
	<div class="alert alert-danger" role="alert">
		<p>{{ Session::get('error') }}</p>
	</div>
@endif

