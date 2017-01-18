@extends('welcome')
@section('content')
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Signup</h1>
			</div>

			<div class="login-form">
				<form action="/user" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="control-group">
						<input type="text" class="login-field" value="" placeholder="username" name="name" id="signup-name">
						<label class="login-field-icon fui-user" for="signup-name"></label>
					</div>

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="email" name="email" id="signup-email">
                        <label class="login-field-icon fui-user" for="signup-email"></label>
                    </div>

					<div class="control-group">
    					<input type="password" class="login-field" value="" placeholder="password" name="password" id="signup-pass">
    					<label class="login-field-icon fui-lock" for="signup-pass"></label>
				   </div>
				   <button type="submit" class="btn btn-success btn-block">Go</button>
				</form>
                <br>
                @extends('errors')
			</div>
		</div>
	</div>
@endsection