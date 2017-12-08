@extends('layouts.app')

@section('content')
	<a href="/temps" class="btn btn-default">Go Back</a>
	<h1>Edit Reading</h1>
	{!! Form::open(['action' => ['TempsController@update', $temp->id], 'method'  => 'POST']) !!}
		<div class ="form-group">
		{{Form::label('temp', 'Temp')}}
		{{Form::text('temp', '', ['class' => 'form-control', 'placeholder' => '00.0'])}}
		</div>
		<div class ="form-group">
		{{Form::label('humidity', 'Humidity')}}
		{{Form::text('humidity', '', ['class' => 'form-control', 'placeholder' => '000.00'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection