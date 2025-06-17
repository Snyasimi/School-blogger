<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthService{


	public function authenticate($credentials)
	{

		if (Auth::attempt($credentials)) {

			return Auth::user();
		}

		return null;

	}

	public function registerNewUser(array $userData )
	{

		

		$userData['password'] = bcrypt($userData['confirm_password']);
		unset($userData['confirm_password']);

		$newUser = User::create($userData);

		if($newUser){
			Auth::login($newUser);
			return $newUser;
		}
	
		return null;

	}

	public function logout($user)
	{
		//
	}
}
