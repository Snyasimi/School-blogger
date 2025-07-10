<?php

namespace App\Services;

use App\Models\{User};


class AdminService{
	
	public function getAnalytics()
	{


	}

	public function seachUser(string $username)
	{

		//return null on no available user
		$user = User::where('username',$username)->first();
		return $user;	
	
	}

}
