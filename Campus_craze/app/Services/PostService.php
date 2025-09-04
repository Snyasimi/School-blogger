<?php

namespace App\Services;
use DB;
use \App\Models\{User,Posts,PostLikes,PostReports};

class PostService {

	//protected $all_posts;

	public function __construct()
	{
		//$this->all_posts = Posts::all();
	}

	public function getPosts(){

		$posts = Posts::with(['author'])->take(20)->get();
		return $posts;
	}
	public function getTrendingPosts(int $count)
	{

		$posts = Posts::with(['author'])->orderBy('created_at','desc')->take($count)->get();
		return $posts;
		
	
	}
	public function searchPost($keyword)
	{
		$keyword = $keyword;
		$posts = Post::with(['author'])->where('title','like',"%{$keyword}%")->get();

		return $posts;
	}
	
	public function fetchPost($post_id)
	{

		$post = Posts::with(['author','comment'])->whereId($post_id)->first();

		$post->load('comment');		
		return $post;
	}
	public function savePost(User $user,array $postData){
		
		$postImagePath = $postData['image']->store('postImages','public');
	    $postData['image'] = $postImagePath;	

		$post = $user->posts()->create($postData);

		if(!$post) throw new \Exception("Failed to create post\n");

		return $post;
	}

	public function likePost($user,$postId)
	{
		
		$like = PostLikes::where('user_id',$user->id)->where('post_id',$postId)->first();

		if($like)
		{
			false;
		}

			


		DB::transaction( function () use ($user,$postId){

			$post = Posts::find($postId);
			$post->increment('likes',1);
			//$like = PostLikes::create(['post_id' => $postId,'user_id' => $userId]);
			$res = $user->likedPosts()->attach($postId);
		});
		
		return true;

	
	}

	public function reportPost($user,$postId)
	{
		
		$report = PostReports::where('user_id',$user->id)->where('post_id',$postId)->first();

		if($report)
		{
			false;
		}

			


		DB::transaction( function () use ($user,$postId){

			Posts::where('id', $postId)->increment('reports', 1);
			//$like = PostLikes::create(['post_id' => $postId,'user_id' => $userId]);
			$res = $user->reportedPosts()->attach($postId);
		});
		
		return true;

	
	}


}
