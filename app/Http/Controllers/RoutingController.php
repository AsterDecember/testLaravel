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

    public function signup(){
        return view('signup');
    }

    public function delete(){
        return view('delete');
    }

    public function user(){
        $users = User::all();
        return view('user',['users'=>$users]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function postLogin(Request $request){
    
        $name = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function postSignup(Request $request){
        $User= new User;
        $User->name=$request->input('name');
        $User->email=$request->input('email');
        $User->password=bcrypt($request->input('password'));
        $User->save();
        return redirect('user');
    }

    public function postDelete(Request $request){

        if($user = User::where('name',$request->input('name'))->first()){
            $user->delete();
            flash('Success!');
            return redirect('delete');
        }else{
            flash('Error!');
            return redirect('delete');
        }
    }

    
}