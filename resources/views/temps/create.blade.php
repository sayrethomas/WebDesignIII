@extends('layouts.app')

@section('content')
	<a href="/temps" class="btn btn-default">Go Back</a>
	<h1>Add Reading</h1>
	{!! Form::open(['action' => 'TempsController@store', 'method'  => 'POST']) !!}
		<div class ="form-group">
		{{Form::label('temp', 'Temp')}}
		{{Form::text('temp', '', ['class' => 'form-control', 'placeholder' => '00.0'])}}
		</div>
		<div class ="form-group">
		{{Form::label('humidity', 'Humidity')}}
		{{Form::text('humidity', '', ['class' => 'form-control', 'placeholder' => '000.00'])}}
		</div>
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection