@extends('layouts.app')

@section('content')
<div class="text-center">
 <a href="/" class="btn btn-default">Go Back</a>

   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Temps</h1></div>
	<button type="button"><a href="/temps/create">Record Reading</a></button>
	</div>
	@if(count($temps) > 1)
		@foreach($temps as $temp)
			<div class="well">
				<h1>Reading: <a href="/temps/{{$temp->id}}">{{$temp->id}}</a></h1>
				<h3>Temp: {{$temp->temp}} Humidity: {{$temp->humidity}}</h3>
			</div>
		@endforeach
	@else
		<p>No posts found</p>
	@endif
	</div>
	</div>
	</div>
@endsection