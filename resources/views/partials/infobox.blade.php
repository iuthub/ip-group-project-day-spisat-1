@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<p>{{ Session::get('success') }}</p>
	</div>
@endif

@if(Session::has('info'))
	<div class="alert alert-info" role="alert">
		<p>{{ Session::get('info') }}</p>
	</div>
@endif