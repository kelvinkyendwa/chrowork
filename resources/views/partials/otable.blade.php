<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Project Name</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Hours</th>
      
    </tr>
  </thead>
  @foreach($user->overtimes as $item)

  
 <tbody>
      @if($item->isAuthorised())
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->project['project']}}</td>
                <td>{{$item->description}}</td>
                <td>{{ Carbon\Carbon::parse($item->date)->formatLocalized('%A %d %B %Y')}}</td>
                <td>{{$item->hours}}</td>
              </tr>
            
          
    @endif
  </tbody>
@endforeach   	
</table>

