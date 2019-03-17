<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
       $request->validate([ 
        'first_name' => 'required|max:50',
        'last_name'  => 'required|max:50',
        'email'      => 'required|email|unique:users',
        'password'   => 'required|confirmed|min:6',
       ]);

       $user = User::create(request(['first_name', 'last_name', 'email', 'password']));

       auth()->login($user);

       return redirect('/');
    }

    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/posts');
        } else {
            return back()->withErrors([
                'errors'=> 'Check your credentials!'
            ]);
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }
}
