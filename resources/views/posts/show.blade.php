@extends('layouts.app')

@section('content')
<div class="text-center">
 <a href="/posts" class="btn btn-default">Go Back</a>

   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{$post->title}}</h1></div>
	<div>
	<p><br>{!!$post->post!!}</p>
	</div>
	<small>Created: {{$post->created_at}} Posted By User: {{$post->user_id}}</small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
	
	{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
	</div>
	</div>
	</div>
	</div>
@endsection