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
		$user = User::where('username','like',"%{$username}%")->get();
		return $user;	
	
	}

	public function fetchUser($user_id)
	{

		$user = User::with(['posts','comments'])->find($user_id);

		return $user;
	}

	public function getBlockedUsers()
	{
		/* $users = User::where('account_status','flagged')
						->orWhere('account_status','banned')->get();
			*/
		//##TODO REMOVE BELOW CODE
		$user = User::limit(20)->get();
		return $user;
	}

}
