<?php

namespace App\Services;

use App\Models\{User,Posts,PostReports};


class AdminService{
	
	public function getAnalytics()
	{

		//total number of users, total number of blogs, total number of reported blogs

		$totalUsers = User::count();
		$totalBlogs = Posts::where('status','normal')->count();
		$reportedBlogs =  PostReports::count();

		return [
			'totalUsers' => $totalUsers, 
			'totalBlogs' => $totalBlogs, 
			'reportedBlogs' => $reportedBlogs
		];


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
		 $users = User::where('account_status','flagged')
						->orWhere('account_status','banned')->get();
			
		//##TODO REMOVE BELOW CODE
		
		return $users;
	}

	public function searchPost($keyword)
	{
		$keyword = $keyword;
		$posts = Posts::with(['author'])->where('title','like',"%{$keyword}%")->get();

		return $posts;
	}

	public function getDeletedBlogs($keyword)
	{
		$keyword = $keyword;
		$posts = Posts::with(['author'])->where('title','like',"%{$keyword}%")->where('status','banned')->get();

		return $posts;
	}

	public function getReportedBlogs($keyword)
	{
		$keyword = $keyword;
		$posts = Posts::with(['author'])->where('title','like',"%{$keyword}%")->get();

		return $posts;
	}

	public function getBlog($blogId)
	{
		$blog = Posts::with(['author','comment'])->find($blogId);

		return $blog;

	}

	public function updateUserStatus($user,$status)
	{
		/* $user = User::where('id',$user)->update([
			'account_status' => $status
		]); */

		//$user->account_status = $status;
		
		$user = User::whereId($user)->first();

		if(!$user)
		{
			return false;
		}
		switch($status)
		{
			case 'active':
				$user->account_status = 'active';
				break;
			case 'flagged':
				$user->account_status = 'flagged';
				break;
			case 'banned':
				$user->account_status = 'banned';
				break;
		}
		

		$user->save();

		return true;

	}

	public function seachBlockedUser($keyword)
	{

	}

	public function updateBlogStatus($blog,$status)
	{
		$blog = Posts::find($blog);

		switch($status)
		{
			case 'normal':
				$blog->status = 'normal';
				break;
			case 'flagged':
				$blog->status = 'flagged';
				break;
			case 'banned':
				$blog->status = 'banned';
				break;
		}

		$blog->save();

		return true;

	}

}
