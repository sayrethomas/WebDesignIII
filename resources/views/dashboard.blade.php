@extends('layouts.app')

@section('content')
<div class="text-center">
<a href="/" class="btn btn-default">Go Back</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			<div class="text-center">
                <div class="panel-heading"><h1>Dashboard</h1></div>
				<p>  Welcome to your Dashboard! Create Temperature Readings and Journal Entries!</p>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/temps/create" class="btn btn-primary">Make Recording</a>
					<a href="/posts/create" class="btn btn-danger">Write Journal Entry</a>
					</div>
					<h1>Your Journal Entries</h1>
					<table class="table table-striped">
					@if(count($posts) > 1)
						@foreach($posts as $post)					
							<tr>
								<th>{{$post->title}}- <br><small>{!!$post->post!!}</small></th>
								<th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
							</tr>
						@endforeach
		
					@else
						<p>No posts found</p>
					@endif
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
