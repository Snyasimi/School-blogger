<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LikeRequest;
use App\Services\PostService;

class PostLikesController extends Controller
{
	//
	//
	protected $postservice;
	public function __construct(PostService $postservice)
	{

		$this->postservice = $postservice;
	}

	public function index(){
	
	}

	public function store(LikeRequest $request)
	{
		$user = $request->user();
		$post_id = $request->validated()['post_id'];

		//$like = $this->postservice->likePost($user,$post_id);

			$like = $this->postservice->likePost($user,$post_id);



		return back();
	}
}
