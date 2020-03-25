@extends('layouts.app')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'BlogController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title..'])}}
    	</div>
    	<div class="form-group">
    		{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter content..'])}}
    	</div>
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection