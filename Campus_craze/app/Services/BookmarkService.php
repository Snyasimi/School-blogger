<?php

namespace App\Services;
use \App\Models\{Posts,Bookmarks};

Class BookmarkService {





	public function getBookmarks(int $user_id)
	{
		$post_ids = Bookmarks::with(['user'])->where('user_id',$user_id)->pluck('post_id')->toArray();

		$posts = Posts::with(['author'])->whereIn('id',$post_ids)->get();


		return $posts;
	}



}
