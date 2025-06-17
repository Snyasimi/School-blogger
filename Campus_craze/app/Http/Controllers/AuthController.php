<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use \Illuminate\Support\Facades\Auth;

use App\Http\Requests\{SignUpRequest,LoginRequest,LogoutRequest};

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

	public function signup()
	{

		return view('auth.signUp');

	}

	public function register(SignUpRequest $request)
	{

		$data = $request->validated();

		$user = $this->authservice->registerNewUser($data);

		if(!$user)
		{
			return back()->with('message','Failed to create account');
		}

		return redirect()->action([HomeFeedController::class,'index']);

	}
	
	public function authenticate(LoginRequest $request)
	{

		$credentials = $request->validated();

		$user = $this->authservice->authenticate($credentials);

		if($user){
			
			$request->session()->regenerate();

			return redirect()->intended(route('homefeed'));
		}

		return back()->withErrors([

			'email' => 'The provided credentials do not match our records.'

		])->onlyInput('email');

	}

	public function logout(LogoutRequest $request)
	{

		
		Auth::logout(); 
		session()->invalidate();
		session()->regenerateToken();

		return redirect()->route('landingPage');

	}
}
