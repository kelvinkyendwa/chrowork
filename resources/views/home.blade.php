@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="row">
                  <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Time Sheets</h4>
                                <p class="card-text">Fill in the time</p>
                                <a href="{{ url ('/time') }}" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Overtime</h4>
                                <p class="card-text">Fill in the Overtime</p>
                                <a href="{{ url ('/over') }}" class="btn btn-primary">Manage</a>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    <hr>
    </div>

</div>
@endsection