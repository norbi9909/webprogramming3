@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['BlogController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Update title...'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Update body...'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection