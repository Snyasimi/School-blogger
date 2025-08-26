<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeFeedController,
	UserController,
	UserPostController,
	UserCommentController,
	AuthController,
	CommentsController,
	BookmarksController,
	PostsController,
	PostLikesController,
	AdminController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [HomeFeedController::class,'index'])->name('landingPage');

Route::get('/',function (){
	return view('landingPage');
})->name('landingPage');

Route::controller(AuthController::class)->group(function(){

	Route::get('login','login')->name('loginPage');
	Route::post('login','authenticate')->name('authenticate');

	Route::get('signup','signup')->name('signUpPage');
	Route::post('signup','register')->name('register');

	Route::post('user/{user}/update-security-details','updateSecurityDetails')->name('updateSecurityDetails');


	Route::post('logout',[AuthController::class,'logout'])->name('logout');

});



Route::controller(HomeFeedController::class)->group(function(){

	Route::get('home','index')->name('homefeed');
	Route::get('bookmarks','getBookmarks')->name('getBookemarks');
	Route::get('trending-posts','getTrendingPosts')->name('getTrendingPosts');
	
});

Route::controller(UserController::class)->group( function(){


	Route::post('user/{user}/update-details','updateDetails')->name('updateDetails');

});


Route::resource('comment',CommentsController::class);
Route::resource('user.posts',UserPostController::class);
Route::resource('user.comments',UserCommentController::class);
Route::resource("user",UserController::class);
Route::resource('bookmark',BookmarksController::class);
Route::resource('blog',PostsController::class);
Route::resource('post.like',PostLikesController::class);



Route::resource('admin',AdminController::class);

Route::controller(AdminController::class)->group(function(){

	Route::get('manager/search-users','searchUsers')->name('fetchUser');
	Route::get('manager/searchUser','userSearch')->name('admin.searchUser');
	Route::get('manager/user/show/{user_id}','showUser')->name('admin.showUser');	
	Route::get('manager/user/create','createUser')->name('admin.createUser');

	Route::get('manager/user/show-banned','blockedUserSearch')->name('admin.bannedUsers');
	Route::get('manager/user/banned','blockedUsers')->name('admin.getBannedUsers');

	Route::get('manager/blog/search','searchPost')->name('admin.searchPosts');
	Route::get('manager/blog/show-blogs','fetchPost')->name('admin.getPosts');

	Route::get('manager/blogs/reported','reportedPosts')->name('admin.reportedPosts');
	Route::get('manager/blogs/show-reported','showReportedPosts')->name('admin.getReportedPosts');

	Route::get('manager/blogs/deleted','deletedPosts')->name('admin.deletedPosts');
	Route::get('manager/blogs/show-deleted','showDeletedPosts')->name('admin.getDeletedPosts');

	
	
});
