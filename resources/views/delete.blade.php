<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

  
</head>

<body>
  <body>
          @extends('navbar');

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Delete User</h1>
			</div>



			<div class="login-form">
				<form action="/auth/delete" method="post">
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
				   <button type="submit" class="btn btn-danger btn-block">Delete</button>
				</form>
                @include('flash::message')
			</div>
		</div>
	</div>
</body>
  
  
</body>
</html>
