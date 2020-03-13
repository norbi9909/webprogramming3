@extends('layouts.app')
@section('content')
	<div class="card bg-primary">
	  <div class="card-header">
	    Follow other bloggers
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Your frinds might do something interesting! Check out what they just posted!</h5>
	    <p class="card-text">You won't believe what your old pal just did on the weekend!</p>
	    <a href="/posts" class="btn btn-dark">Go to Blog</a>
	  </div>
	</div>
	<div class="card mt-2 bg-primary">
	  <div class="card-header">
	    Write your own Posts
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Did something interesting happen? Let your friends know!</h5>
	    <p class="card-text">We believe everyone experiences something special and we'd like to encourage you to share that with your friends</p>
	    <a href="#" class="btn btn-dark">Post something</a>
	  </div>
	</div>
@endsection