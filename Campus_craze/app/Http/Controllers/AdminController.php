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
	
	
	

	public function userSearch()
	{
		return view('admin.userSearch');
	}

	public function searchUsers(Request $request)
	{
		$username = $request->query('searchFied');
		$user = $this->adminservice->seachUser($username['searchField']);
		return view('admin.search.user-result',['data' => $user]);
	
	}

}
