@extends('layouts.app')

@section('content')
<div class="text-center">
 <a href="/" class="btn btn-default">Go Back</a>

   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Journal Entries</h1></div>
	
	<button type="btn btn-default"><a href="/posts/create">Create Entry</a></button>
	</div>
	@if(count($posts) > 1)
		@foreach($posts as $post)
			<div class="well">
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3><p> {!!$post->post!!}</p>
			
			
			</div>
			
		@endforeach
		
	@else
		<p>No posts found</p>
	@endif
	</div>
	</div>
	</div>
@endsection