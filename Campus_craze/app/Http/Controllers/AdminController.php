<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Posts};
use App\Services\{AdminService,PostService};
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
	protected $adminservice,$postservice;
	public function __construct(AdminService $adminservice,PostService $postservice)
	{
		$this->adminservice = $adminservice;
		$this->postservice = $postservice;
	}

	public function index()
	{

		$analytics = $this->adminservice->getAnalytics();

		$trending_posts = $this->postservice->getTrendingPosts(6);
		

		return view('admin.index',['analytics' => $analytics, 'trendingPosts' => $trending_posts ]);
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



	public function generate_reports(){

		$totalUsers = User::count();
        $totalBlogs = Posts::count();
        $bannedBlogs = Posts::with(['author'])->where('status', 'banned')->get();
        $bannedUsers = User::where('account_status', 'banned')->get();
        $activeBlogs = Posts::with(['author'])->where('status', 'active')->get();

        $pdf = Pdf::loadView('admin.site-reports', [
            'totalUsers' => $totalUsers,
            'totalBlogs' => $totalBlogs,
            'bannedBlogs' => $bannedBlogs,
            'bannedUsers' => $bannedUsers,
            'activeBlogs' => $activeBlogs,
        ]);

        $pdf->setPaper('A4', 'portrait');

        return $pdf->download('site-reports.pdf');
    }
	
		

}
