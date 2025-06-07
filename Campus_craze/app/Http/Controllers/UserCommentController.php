<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCommentController extends Controller
{
	public function index(){

		return view('users.profile.comments');
	}
}
