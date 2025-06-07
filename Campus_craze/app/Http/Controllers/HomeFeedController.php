<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class HomeFeedController extends Controller
{
	protected $postservice;

	
	public function __construct(PostService $postservice){

		$this->postservice = $postservice;

	}
	//
	public function index(){

		$trending_posts = $this->postservice->getTrendingPosts(3);
		$posts = $this->postservice->getPosts();
		return view('users.home',['trendingPosts' => $trending_posts , 'posts' => $posts ]);
	}

	//Takes the profile :
	
}
