<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Services\CommentService;
use App\Http\Requests\CommentRequest;


class CommentsController extends Controller
{
	protected $commentservice;

	public function __construct(CommentService $commentservice)
	{
		$this->commentservice = $commentservice;
	}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
	    $commentData = $request->validated();

	    
	    $user = $request->user();
	    $comment = $this->commentservice->saveComment($user,$commentData);
		
	    return redirect()->action(
		    [PostsController::class,'show'],['blog' => $commentData['post_id'] ]
	    );//->back()->with('success','comment posted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
