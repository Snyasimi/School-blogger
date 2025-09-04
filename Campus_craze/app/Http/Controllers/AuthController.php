<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use \Illuminate\Support\Facades\Auth;

use App\Http\Requests\{SignUpRequest, LoginRequest, LogoutRequest, UpdateSecurityDetailsRequest};

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
			dd($user);
		}

		return redirect()->action([HomeFeedController::class,'index']);

	}
	
	public function authenticate(LoginRequest $request)
	{

		$credentials = $request->validated();

		$user = $this->authservice->authenticate($credentials);

		if($user){
			
			$request->session()->regenerate();

			if($user->is_admin == 1)
			{
				return redirect()->intended(route('admin.index'));
			}
			return redirect()->intended(route('homefeed'));
		}

		return back()->withErrors([

			'email' => 'The provided credentials do not match our records.'

		])->onlyInput('email');

	}

	public function updateSecurityDetails(UpdateSecurityDetailsRequest $request)
	{
		$user = $request->user();

		$data = $request->validated();

		$status = $this->authservice->updateSecurityDetails($user,$data);

		return view('notification.alert',['message' => $status['message']]);
	}

	public function logout(LogoutRequest $request)
	{

		
		Auth::logout(); 
		session()->invalidate();
		session()->regenerateToken();

		return redirect()->route('landingPage');

	}
}
