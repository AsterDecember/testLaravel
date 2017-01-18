@extends('welcome')
@section('content')
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<form action="/auth/login" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="control-group">
						<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="username">
						<label class="login-field-icon fui-user" for="login-name"></label>
						</div>

						<div class="control-group">
						<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="password">
						<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>
					<button type="submit" class="btn btn-success btn-block">Go</button>
				</form>
				<br>
				@extends('errors')
			</div>
		</div>
	</div>
@endsection