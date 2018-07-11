
	<div class="form-group">
			<label for="project_id">Select Project</label>
			<select name="project_id" id="project_id" class="form-control">
				@foreach ($list as $lis)
						<option value="{{$lis->id}}">{{$lis->project}}</option>
				@endforeach
			</select>

</div>

		<div class="form-group">
				{{  Form::label('date', 'Date') }}
				{{  Form::date('date', old('date'), ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
				{{  Form::label('hours', 'Hours Worked') }}
			  {{  Form::selectRange('hours', old('hours') ,['class' => 'form-control'] ) }}

		</div>
		<div class="form-group">
			{{  Form::label('description', 'Description') }}
			{{ Form::textarea('description', old('description') ,['class' => 'form-control']) }}

		</div>

		<button type="update" class="btn btn-info">Update</button>
		<button class="btn btn-warning" type="Reset">Reset</button>
