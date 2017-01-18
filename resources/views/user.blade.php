@extends('welcome')
@section('content')
    <link rel="stylesheet" href="/css/user.css">
    <!-- Page Content -->
    <div class="container" ng-controller="deleteController">

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
                        <button class="btn btn-danger" ng-click="delete({{$user->id}})">
                            .I.
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('flash::message')


    </div>
@endsection