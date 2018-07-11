@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
	<h3>Overtime Application</h3>
	<hr>
	@include('layouts.errors')
	<form action="/over" method="POST">
		{{ csrf_field() }}
		@include('partials.timeform')

	</form>

	<hr>
	
</div>

@endsection