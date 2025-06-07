<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\{PostRequest};

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
	protected $postservice; 
    public function __construct(PostService $postservice)
   {
	$this->postservice = $postservice;
   }

    public function index()
    {
	    $trending_posts = $this->postservice->getTrendingPosts(3);
	    $posts = $this->postservice->getPosts();
        return view('Blogs.index',['trendingPosts' => $trending_posts,'posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
	    $postData = $request->validated();

	    //$user = $request->user();
	    //#TODO ADD USER OBJ TO BE PASSED
	    
	    $user = \App\Models\User::where('id',1)->first();
	    $post = $this->postservice->savePost($user,$postData);

	    return redirect()->route('blog.show',[
		    'blog' => $post['id'] 
	    ]);
    }	

    /**
     * Display the specified resource.
     */
    //RETURN THE ARGS POST $POST
    public function show($post_id)
    {
	    //
	    $post = $this->postservice->fetchPost($post_id);
            

	    return view('Blogs.show', ['blog' => $post] );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }

    
}
