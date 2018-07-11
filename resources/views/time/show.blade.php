@extends ('layouts.app')

@section('content')
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<div class="container">
	<h3>Timesheet Entries</h3>
  <hr>
	<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Project Name</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>


  <tbody>
     
          <tr>
            <td>{{$time->project['project']}}</td>
            <td>{{$time->description}}</td>
            <td>{{$time->date}}</td>
           
           @if($time->isAuthorised())
            <td class="text-success"><strong>Authorised</strong> </td>
            <td>No action needed</td>
          @else
           <td class="text-warning"><strong>Pending</strong> </td>
           <td><a href="{{$time->id}}/edit" class="btn btn-warning">Update</a> - <a href="{{ route ('delete_timesheet')/$time->id }}" class="btn btn-danger">Delete</a></td>
          @endif
            
          </tr>
  
  </tbody>

	
	</table>
    <p>Go back to previous pages</p>
<ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('time/create') }}">Fill</a>
      </li>
       <li class="nav-item"> <a class="nav-link">/</a></li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('time') }}">Home</a>
      </li>
          
    
</ul>
</div>

@endsection