<?php 

namespace App\Services;

use App\Models\{User,Posts};

class UserPostService{

    

    public function getUserPosts($userId){

	    $user = User::with(['posts'])->find($userId);
	    $posts = $user->posts;

        return $posts;

    }

}
