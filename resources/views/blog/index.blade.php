@extends('layouts.app')

@section('content')
	<h1>Newsfeed</h1>
	@if(count($posts) > 0 )
		@foreach($posts as $post)
			<div class="card bg-primary mb-2">
			  <div class="card-header">
			    <small>Created at {{$post->created_at}} @if(isset($post->user)) by {{$post->user->name}} @endif</small>
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">{{$post->title}}</h5>
			    <p class="card-text">{{$post->body}}</p>
			    <a href="/posts/{{$post->id}}" class="btn btn-dark">More</a>
			  </div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<h4>No posts found!</h4>
		<p>Wanna share something?</p>
		<a href="/posts/create" class="btn btn-primary">Post now!</a>
	@endif
@endsection