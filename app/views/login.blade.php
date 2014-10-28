@extends('layout')

@section('content')
	@if (Session::has('flash_error'))
		<div id="flash_error">{{ Session::get('flash_error') }}</div>
	@endif

	{{ Form::open(array('url' => 'login')) }}
		<h1>Log in</h1>
		
		<p>
			{{ Form::label('username', 'Username') }}<br>
			{{ Form::text('username', Input::old('username')) }}
		</p>
		<p>
			{{ Form::label('password', 'Password') }}<br>
			{{ Form::password('password') }}
		</p>

		<p>
			{{ Form::submit('Login') }}
		</p>

	{{ Form::close() }}
@stop
