@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your blog posts</h3>
                        @if(count($posts) > 0)
                        <div class="row justify-content-around">
                            @foreach($posts as $post)
                            <div class="card col-md-5" style="width: 18rem;">
                              <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->body}}</p>
                                <a href="/posts/{{$post->id}}" class="btn btn-dark">More</a>
                              </div>
                            </div>
                            @endforeach
                            </div>
                        @else
                        <h4>No posts found!</h4>
                        <p>Wanna share something?</p>
                        <a href="/posts/create" class="btn btn-primary">Post now!</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
