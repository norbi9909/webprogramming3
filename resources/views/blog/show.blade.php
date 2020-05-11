@extends('layouts.app')

@section('content')
	<h1 style="color:#FFF">{{$post->title}}</h1>	
	<div>
		<p style="color:#FFF">{{$post->body}}</p>
	</div>
	<hr>
	<small style="color:#FFF">Created at {{$post->created_at}}</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id === $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
			
			{!!Form::open(['action' => ['BlogController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
@endsection