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

Route::get('/','RoutingController@index');

Route::get('/login','RoutingController@login');

Route::get('/signup','RoutingController@signup');

Route::get('/user','RoutingController@user');

Route::get('/delete','RoutingController@delete');

Route::get('/logout','RoutingController@logout');

Route::post('/auth/delete','RoutingController@postDelete');

Route::post('/auth/login','RoutingController@postLogin');

Route::post('/auth/signup','RoutingController@postSignup');

