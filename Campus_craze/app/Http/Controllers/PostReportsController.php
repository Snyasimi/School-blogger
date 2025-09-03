<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;


class PostReportsController extends Controller
{
    //

    protected $postservice;
	public function __construct(PostService $postservice)
	{

		$this->postservice = $postservice;
	}

    public function store(Request $request)
	{
		try
		{

			$user = $request->user();
			$post_id = $request->validate([
                'post_id' => ['required']
            ]);

			$report = $this->postservice->reportPost($user,$post_id);

			if($report)
			{
				$message="Post reported";
				return view('notification.alert',['message' =>$message ]);
			}



			$message="Post already reported";
			return view('notification.alert',['message' =>$message ]);
		}
		catch(\Exception $e)
		{


			$message= "having trouble liking the post" ;
			return view('notification.alert',['message' =>$message ]);
		}
	}

}
