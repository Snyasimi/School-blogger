<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
		$userData['profile_picture'] = 'None';
		unset($userData['confirm_password']);

		$newUser = User::create($userData);

		if($newUser){
			Auth::login($newUser);
			return $newUser;
		}
	
		return null;

	}

	public function updateDetails($user, $data)
	{
		if(isset($data['image']))
		{		
			$data['profile_picture'] = $data['image']->store('profile-pictures');
		}
		
		$updatedRows = $user->update([ 
				'firstname' =>$data['firstname'] ?? $user->firstname,
				'lastname' => $data['lastname'] ?? $user->lastname,
				'username' => $data['username'] ?? $user->username,
				'campus' => $data['campus'] ?? $user->campus,
				'profile_picture' => $data['profile_picture'] ?? $user->profile_picture
		]);

			$status = array('status' => true, 'message' => "Data updated");
	
		

		return $status;

	}

	public function updateSecurityDetails($user,$data)
	{
		if(Hash::check($data['current_password'],$user->password))
		{
			$updatedRows = $user->update([

				'email' => $data['email'] ?? $user->email,
				'phone_number' => $data['phone_number'] ?? $user->phone_number,
				'password' => bcrypt( $data['new_password'] ?? $user->password ) 
			]);

			return array('status' => true, 'message' => 'security details updated');
		}

		
		return array('status' => false, 'message' => 'failed to update');

	}


	public function logout($user)
	{
		//
	}


}
