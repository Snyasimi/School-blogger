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
		try
		{

			$user = $request->user();
			$post_id = $request->validated()['post_id'];

			$like = $this->postservice->likePost($user,$post_id);

			if($like)
			{
				$message="Post liked";
				return view('notification.alert',['message' =>$message ]);
			}



			$message="Post already liked";
			return view('notification.alert',['message' =>$message ]);
		}
		catch(\Exception $e)
		{


			$message= "Having trouble liking the post";
			return view('notification.alert',['message' =>$message ]);
		}
	}
}
