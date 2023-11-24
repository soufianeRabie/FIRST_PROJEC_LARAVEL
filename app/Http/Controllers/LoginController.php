<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('Login.show');
    }

    public function login (Request $request){

        $login = $request->email;
        $password = $request->password;

        $credentials = ['email'=> $login , 'password'=>$password];
        
     if(Auth::attempt($credentials) ){
        return to_route("homePage")->with('success' , "you has been connect successfly");
    }

    return back()->withErrors([
        'email'=> "email or password incorrect!"
    ])->onlyInput('email');

    }

    public function create  ()
    {
        return view ("register.show");
    }   

    public function logout (){
        session()->flush();
        Auth::logout();

        return to_route('login')->with('success' , "you logout successfly");


    }
}