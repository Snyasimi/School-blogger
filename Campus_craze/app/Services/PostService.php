<?php

namespace App\Services;
use DB;
use \App\Models\{User,Posts,PostLikes};

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

	public function likePost($userId,$postId)
	{
		
		$like = false;// PostLikes::where('user_id',$userId)->where('post_id',$postId)->first();
		
		
		if($like){

			//throw new Exception("Post already liked");
			return null;
		}	


		DB::transaction( function () use ($userId,$postId){

			$post = Posts::find($postId);
			$post->increment('likes',1);
			//$like = PostLikes::create(['post_id' => $postId,'user_id' => $userId]);
		});
		
		return $like;

	
	}

	public function reportPost($post_id){

			
	}

}
