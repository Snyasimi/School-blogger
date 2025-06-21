<?php

namespace App\Services;

use \App\Models\{User,Posts};

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

		$posts = Posts::with(['author'])->orderBy('likes','desc')->take($count)->get();
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

	public function reportPost($post_id){

			
	}

}
