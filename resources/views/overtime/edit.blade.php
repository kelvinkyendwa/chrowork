@extends ('layouts.app')

@section('content')
<div class="container">
	<h3>Edit an Entry</h3>
	@include('layouts.errors')
		{!! Form::model($overtime,array('route' => ['over.update',$overtime->id], 'method' => 'PUT')) !!}
			{{ csrf_field() }}
			@include('partials.timeform')

		{{!! Form::close() !!}}

</div>


@endsection
