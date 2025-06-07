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
}
