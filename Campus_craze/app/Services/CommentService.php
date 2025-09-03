<?php


namespace App\Services;

use App\Models\{User,Comments};


class CommentService{


	public function saveComment(User $user,$commentData)
	{

		$comment = $user->comments()->create($commentData);

		if(!$comment) throw new \Exception("Failed to create comment"); 

		return $comment;
	}

	public function getUserComments($user)
	{
		$user =User::with(['comments'])->find($user);

		//$comments = Comments::with()
		if($user)
		{
			return $user;
		}

		return false;
	}
}
