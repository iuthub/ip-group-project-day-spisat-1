@if(Session::has('info'))
	<div class="alert alert-success" role="alert">
		<p>{{ Session::get('info') }}</p>
	</div>
@endif