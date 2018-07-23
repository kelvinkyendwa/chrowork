@extends ('layouts.app')

@section('content')
<br><br>
<div class="row" id="root">
	<div class="col-md-5">

			<h3>Timesheets Application</h3>
			<hr>

				{!! Form::open(['url' => 'time/']) !!}

					{{ csrf_field() }}

					@include('partials.timeform')

			{!! Form::close() !!}

				<hr>

	</div>
	<div class="col-md-6">
		<!-- <div id="submit"></div> -- >
	</div>
</div>
@endsection
