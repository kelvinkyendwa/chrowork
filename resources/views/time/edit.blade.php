@extends ('layouts.app')
@section('content')
<br><br>
<div class="container">
	<h3>Update A Timesheets Application</h3>
	<hr>
	<div class="card danger">
		<div class="card-body">
		<h4><strong>Currently Updating - Timesheet #{{$time->id}} - Project  {{$time->project['project']}}</strong></h4>

		<p><strong>Description</strong>  -  {{$time->description}}</p>
		<p><strong>Date</strong>  -  {{ Carbon\Carbon::parse($time->date)->formatLocalized('%A %d %B %Y')}}</p>
		</div>
	</div>
	<br> <br>
	{!! Form::model($time, ['method' => 'PUT', 'route' => ['time.update', $time->id]]) !!}
	{{ csrf_field() }}
	@include('partials.edittimeform')
	{!! Form::close() !!}
	<hr>
</div>
<ul class="nav nav-pills">
	
	<li class="nav-item">
		<a class="nav-link" href="{{ url('time/show') }}">Home</a>
	</li>
	
	
</ul>
@endsection