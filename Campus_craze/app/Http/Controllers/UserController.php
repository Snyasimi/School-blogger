<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{

    protected $userservice;

    public function __construct(UserService $userservice){

        $this->userservice = $userservice;

    }
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
	    //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    /// Return the user args below
    public function show($userId)
    {

        $user = $this->userservice->getUser($userId);

        return view('users.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    //RETURN THE USER INJECTION HERE
    public function edit()
    {
	    //

	    return view('users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
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
