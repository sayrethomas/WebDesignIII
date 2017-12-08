@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>Edit Entry</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method'  => 'POST']) !!}
		<div class ="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class ="form-group">
		{{Form::label('post', 'Post')}}
		{{Form::textarea('post', $post->post, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Place Entry Here'])}}
		</div>
		{{Form::hidden('_method', 'PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection