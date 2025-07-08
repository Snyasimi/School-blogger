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

}
