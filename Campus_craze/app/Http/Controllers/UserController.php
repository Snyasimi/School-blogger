<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\{SignUpRequest,UpdateDetailsRequest};
use App\Services\{UserService,AuthService};

class UserController extends Controller
{

    protected $userservice,$authservice;

    public function __construct(UserService $userservice,AuthService $authservice){

        $this->userservice = $userservice;
        $this->authservice = $authservice;

    }
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
	    // #TODO this is bad, change this
	    $users = $this->userservice->getUsers();
	    //$users = User::all();

	    return view('admin.search.user-results',['data' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SignUpRequest $request)
    {
        $data = $request->validated();
        $user = $this->authservice->registerNewUser($data);

        dd($user);
        if($user) {
    
            return back()->with('success', 'User created successfully!');

        } else {

            return back()->with('error', 'User creation failed. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    /// Return the user args below
    public function show(Request $request,$userId)
    {

        $user = $this->userservice->getUser($userId);

        return view('users.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //RETURN THE USER INJECTION HERE
    public function edit(User $user)
    {
	    //
	    if(!$user)
	    {
		    $user = Auth::user();
	    }

	    return view('users.edit',['user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function updateDetails(UpdateDetailsRequest $request, User $user)
    {
	    
	    if(!$user)
	    {
		    $user = Auth::user(); 
	    }
	    
	    $data = $request->validated();
	    $data['image'] = $request->file('profile_pic');

		//dd($data);	
	    $status = $this->authservice->updateDetails($user,$data);	    
	    
	    if($status['status'])
	    {

		    return view('notification.alert',[ 'message' => $status['message'] ]);
	    }

	    return view('notification.alert',['message' => $status['message']]);
	    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function getPosts(){

	    //blog service should get the data
	    return view('users.profile.posts');
    }
}
