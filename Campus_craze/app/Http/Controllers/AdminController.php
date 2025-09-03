<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
	protected $adminservice;
	public function __construct(AdminService $adminservice)
	{
		$this->adminservice = $adminservice;
	}

	public function index()
	{

		$analytics = $this->adminservice->getAnalytics();

		return view('admin.index',['analytics' => $analytics]);
	}
	
	public function createUser()
	{
		return view('admin.management.user.add');
	}

	public function userSearch()
	{
		return view('admin.userSearch');
	}

	
	public function searchUsers(Request $request)
	{
		$username = $request->query('searchField');
		$users = $this->adminservice->seachUser($username);
		return view('admin.search.user-results',['data' => $users]);
	
	}

	public function showUser($user_id)
	{
		
		$user = $this->adminservice->fetchUser($user_id);

		return view('admin.management.user.show',['user' => $user]);
	
	}

	public function blockedUserSearch()
	{
		return view('admin.management.user.blocked');
	}

	public function blockedUsers(Request $request)
	{
		 $username = $request->query('searchField');

		 if($username)
		 {
			//$users = $this->adminservice->seachBlockedUser($username);
			$users = $this->adminservice->getBlockedUsers();
			return view('admin.search.user-results',['data' => $users]);
		 }

		 $blockedUsers = $this->adminservice->getBlockedUsers();
		 return view('admin.search.user-results',['data' => $blockedUsers]);
	}

	public function searchPost()
	{
		return view('admin.blogs.blogSearch');
	}


	public function fetchPost(Request $request)
	{
		$keyword = $request->query('searchField');
		$posts = $this->adminservice->searchPost($keyword);

		return view('admin.search.blog-results', ['data' => $posts]);
	}

	public function showBlog($blog)
	{
		$blog = $this->adminservice->getBlog($blog);

		return view('admin.blogs.show',['blog' => $blog]);
	}

	public function updateUserStatus(Request $request,$user)
	{
		$status = $request->validate([
			'status' => ['required']
		]);

		$res = $this->adminservice->updateUserStatus($user,$status);

		if($res)
		{
			$message = 'user updated'; 
			return view('notification.alert',['message' => $message]);

		}

		$message = 'user not updated'; 

		
		return view('notification.alert',['message' => $message]);

	}
	
	public function updateStatus(Request $request,$blog)
	{
		$status = $request->validate([
			'status' => ['required']
		]);

		$res = $this->adminservice->updateBlogStatus($blog,$status);

		$message = 'Blog updated'; 

		return view('notification.alert',['message' => $message]);
	}

	public function deletedPosts()
	{
		return view('admin.blogs.deletedBlogs');
	}

	public function showDeletedPosts(Request $request)

	{
		$keyword = $request->query('searchField');
		$posts = $this->adminservice->getDeletedBlogs($keyword);
		return view('admin.search.blog-results', ['data' => $posts]);
	}

	public function reportedPosts()
	{
		return view('admin.blogs.reportedBlogs');
	}

	public function showReportedPosts(Request $request)
	{
		$keyword = $request->query('searchField');
		$posts = $this->adminservice->getReportedBlogs($keyword);
		
		return view('admin.search.blog-results', ['data' => $posts]);

	}

	public function generate_reports()
	{

		//number of posts,users, reported posts, liked posts.
		// 

	}

}
