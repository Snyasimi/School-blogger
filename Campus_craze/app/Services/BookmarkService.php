<?php

namespace App\Services;
use \App\Models\{User,Posts,Bookmarks};

Class BookmarkService {





	public function getBookmarksBy(User $user)
	{

		$bookmarks = $user->bookmarks();//->with('user')->get();

		//$post_ids = Bookmarks::with(['user'])->where('user_id',$user_id)->pluck('post_id')->toArray();

		//$posts = Posts::with(['author'])->whereIn('id',$post_ids)->get();


		return $bookmarks;
	}

	public function store($user,$post_id)
	{

		$bookmark = $user->bookmarks()->create(['post_id' => $post_id]);

		if($bookmark) return $bookmark;

		return null;

	}

	public function delete($bookmark_id)
	{
		$deleted = Bookmarks::destroy($bookmark_id);
		if ($deleted) {
			// Success
			return true;
		} else {
			// Failure
			return false;
		}
	}



}
