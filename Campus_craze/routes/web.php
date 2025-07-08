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

	Route::post('logout',[AuthController::class,'logout'])->name('logout');

});



Route::controller(HomeFeedController::class)->group(function(){

	Route::get('home','index')->name('homefeed');
	Route::get('bookmarks','getBookmarks')->name('getBookemarks');
	Route::get('trending-posts','getTrendingPosts')->name('getTrendingPosts');
	
});


Route::resource('comment',CommentsController::class);
Route::resource('user.posts',UserPostController::class);
Route::resource('user.comments',UserCommentController::class);
Route::resource("user",UserController::class);
Route::resource('bookmark',BookmarksController::class);
Route::resource('blog',PostsController::class);
Route::resource('post.like',PostLikesController::class);



Route::resource('admin',AdminController::class);

