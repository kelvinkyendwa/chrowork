@extends ('layouts.app')
@section('content')
<div class="container">
 
  <h3>All Overtime Entries</h3>
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
            <td>{{$overtime->project['project'] }}</td>
            <td>{{$overtime->description}}</td>
            <td>{{$overtime->date}}</td>
           
           @if($overtime->isAuthorised())
            <td class="text-success"><strong>Authorised</strong> </td>
            <td>No action needed</td>
          @else
           <td class="text-warning"><strong>Pending</strong> </td>
           <td><a href="{{$overtime->id}}/edit" class="btn btn-warning">Update</a> - 
            <form action="{{ url('/over', ['id' => $overtime->id]) }}" method="post">
              <input type="hidden" name="_method" value="delete" />
              {{ csrf_field() }}
            </form>
           </td>
          @endif
            
          </tr>
  
  </tbody>

	
	</table>
    <p>Go back to previous pages</p>
<ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('over/create') }}">Fill</a>
      </li>
       <li class="nav-item"> <a class="nav-link">/</a></li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('time') }}">Home</a>
      </li>
          
    
</ul>
</div>

@endsection