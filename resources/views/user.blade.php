<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View own Username</title>

    <link rel="stylesheet" href="/css/user.css">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        @extends('navbar');

    <!-- Page Content -->
    <div class="container">

        <table cellspacing="2px">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td><strong>{{$user->id}}</strong></td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->password}}</td>
              <td>
                <form action='/user/{{$user->id}}' method="delete">
                  <button class="btn btn-danger" type="submit">
                    .I.
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        @include('flash::message')


    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>