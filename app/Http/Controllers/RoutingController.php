<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }*/
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function delete(){
        return view('delete');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function postLogin(Request $request){

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            ]);
    
        $name = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

}