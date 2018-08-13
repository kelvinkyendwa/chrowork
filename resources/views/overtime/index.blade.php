@extends ('layouts.app')
@section('content')
<div class="row">
	<div style="z-index: 3; background-color: #34495e; color: white; padding: 30px; width: 260px; position: absolute; right:  0;" class="animated slideInRight">
		<h4><strong>Overtime</strong> </h4>
		<p>This is where you handle overtime</p>
	</div>
	
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title" style=" font-weight: bold;">Apply for Overtime</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="{{ url ('over/create')}}"  class="btn btn-primary">Apply</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title" style=" font-weight: bold;">View All Applications</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="{{ url ('over/all')}}" class="btn btn-primary">View</a>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<h4><strong>Approved Timesheets</strong></h4>
<br>
<br>	@include('partials.otable')
@endsection