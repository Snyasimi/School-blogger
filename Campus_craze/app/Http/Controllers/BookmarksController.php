<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;
use App\Services\BookmarkService;

class BookmarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */


	protected $bookmarkservice;

	public function __construct(BookmarkService $bookmarkservice)
	{
		$this->bookmarkservice = $bookmarkservice;
	}


    public function index(Request $request)
    {
        $user = $request->user();

	    $bookmarks = $this->bookmarkservice->getBookmarksBy($user);

        return view('Bookmarks.index',['bookmarks' => $bookmarks]);
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
    public function store(Request $request)
    {

        $post = $request->validate([
            'post_id' => ['required']
        ]);

        $user = $request->user();
        $bookmark = $this->bookmarkservice->store($user,$post['post_id']);

        if($bookmark){
            return back()->with('message','Bookmark saved');
        }
        else {
            return back()->with('message','Failed to bookmark');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookmarks $bookmarks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookmarks $bookmarks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookmarks $bookmarks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookmarks $bookmarks)
    {
        //
        $bookmarks->delete();

        return redirect()->action([BookmarksController::class,'index']);
    }
}
