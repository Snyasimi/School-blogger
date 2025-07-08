<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserPostService;


class UserPostController extends Controller
{

	protected $userpostservice;

	public function __construct(UserPostService $userpostservice){

		$this->userpostservice = $userpostservice;

	}

	public function index($user){
		
		$posts = $this->userpostservice->getUserPosts($user);

		return view('users.profile.posts',['posts' => $posts]);
	}


}
