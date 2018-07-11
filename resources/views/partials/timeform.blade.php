
	<div class="form-group">
			<label for="project">Select Project</label>
			<select name="project_id" id="project_id" class="form-control">
				@foreach ($list as $lis)
						<option value="{{$lis->id}}">{{$lis->project}}</option>
				@endforeach
			</select>

</div>

		<div class="form-group">
				{{  Form::label('date', 'Date') }}
				{{  Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
				{{  Form::label('hours', 'Hours Worked') }}
			  {{  Form::selectRange('hours', 1, 8 ,['class' => 'form-control'] ) }}

		</div>
		<div class="form-group">
			{{  Form::label('description', 'Description') }}
			{{ Form::textarea('description',null ,['class' => 'form-control']) }}

		</div>

		<button type="Submit" class="btn btn-info">Submit</button>
		<button class="btn btn-warning" type="Reset">Reset</button>
