<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\{UserService,CommentService};

class UserCommentController extends Controller
{

	protected $commentservice;

	public function __construct(CommentService $commentservice)
	{
		$this->commentservice = $commentservice;
	}

	public function index($user)
	{

		$userComments = $this->commentservice->getUserComments($user);

		return view('users.profile.comments',['comments' => $userComments ]);
	}



}
