<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('/user','usersController');

Route::get('/','RoutingController@index');

Route::get('/login','RoutingController@login');

Route::get('/delete','RoutingController@delete');

Route::get('/logout','RoutingController@logout');

Route::post('/auth/login','RoutingController@postLogin');


