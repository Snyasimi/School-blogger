<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

use App\Http\Requests\{SignUpRequest,LoginRequest};

class AuthController extends Controller
{
	protected $authservice;

	public function __construct(AuthService $authservice)
	{

		$this->authservice = $authservice;
	}
	//
	//
	public function login()
	{

		return view('auth.login');
	}
	public function signUp(SignUpRequest $request)
	{

	}
	
	public function authenticate(LoginRequest $request)
	{

		$credentials = $request->validated();

		$user = $this->authservice->authenticate($credentials);

		if($user){
			
			$request->session()->regenerate();

			return redirect()->intended('homefeed');
		}

		return back()->withErrors([

			'email' => 'The provided credentials do not match our records.'

		])->onlyInput('email');

	}
}
