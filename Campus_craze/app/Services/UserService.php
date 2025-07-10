<?php

namespace App\Services;

use \App\Models\{User,Posts};

class UserService {



	public function getUsers()
	{
		$users = User::limit(20)->get();
		return $users;
	}
    public function getUser($user_id)
    {

        $user = User::with(['posts'])->findOrFail($user_id);

        return $user;

    }


}
