<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
	@if (Session::has('flash_error'))
		<div id="flash_error">{{ Session::get('flash_error') }}</div>
	@endif
		
		<h1>Log in</h1>
		{{ Form::open('login', 'POST')}}

		<p>
			{{ Form::label('username', 'Username')}}<br>
			{{ Form:text('username', Input::old('username')) }}
		</p>
		<p>
			{{ Form::label('password', 'Password') }}<br>
			{{ Form::password('password') }}
		</p>

		<p>
			{{ Form::submit('Login') }}
		</p>

		{{ Form::close() }}
	</div>
</body>
</html>
