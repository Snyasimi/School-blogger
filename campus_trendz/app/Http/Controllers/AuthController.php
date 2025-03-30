<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //


    public function login(Request $req){

        return view('auth.login');
        if($req->method() ==" GET"){

        }
        

    }


    public function register(){

        return view('auth.register');

    }

    public function updateDetails(Request $req){

        return redirect()->back();
    }
}
