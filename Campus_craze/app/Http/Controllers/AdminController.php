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
	public function show()
	{
	}
	public function destroy()
	{
	}
	public function edit()
	{
	}
	
	public function create()
	{
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
			$users = $this->adminservice->seachUser($username);
			return view('admin.search.user-results',['data' => $users]);
		 }

		 $blockedUsers = $this->adminservice->getBlockedUsers();
		 return view('admin.search.user-results',['data' => $blockedUsers]);
	}

}
