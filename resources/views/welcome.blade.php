<!DOCTYPE html>
<html lang="en" ng-app="prueba">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User System</title>

    <!-- Custom CSS -->

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <style>
    body {
        padding-top: 70px;

    }
    </style>

</head>

<body>

    @extends('navbar')
    @section('content')
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Registro de Alumnos</h1>
                    <p class="lead">...</p>
                    <ul class="list-unstyled">
                        <li>Bootstrap v3.3.7</li>
                        <li>jQuery v1.11.1</li>
                        <li>AsterDecember</li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    @show
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <script type="text/javascript" src="/bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/app.js"></script>
    <script type="text/javascript" src="/js/angular/controllers/deleteController.js"></script>
</body>

</html>