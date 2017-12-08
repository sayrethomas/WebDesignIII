@extends('layouts.app')

@section('content')
<div class="text-center">
 <a href="/temps" class="btn btn-default">Go Back</a>

   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recording: {{$temp->id}}</div>
	<h1><b>Temperature:</b> {{$temp->temp}}</h1>
	<h1><b>Humidity:</b> {{$temp->humidity}}</h1>
	
	
	<p>Created: {{$temp->created_at}} Recorded By User: {{$temp->user_id}}</p>
	<hr>
	<a href="/temps/{{$temp->id}}/edit" class="btn btn-default">Edit</a>
	
	{!!Form::open(['action' => ['TempsController@destroy', $temp->id], 'method' => 'POST'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
	</div>
	</div>
	</div>
	</div>
@endsection