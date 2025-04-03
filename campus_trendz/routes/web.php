<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeFeedController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('testing',function(){
    return view('users.homepage');
});




Route::get('/', function () {
    return view('welcome');
});


//AUTH ROUTES
Route::get('login',[AuthController::class,'login']);
Route::get('register',[AuthController::class,'register']);



Route::resource('home',HomeFeedController::class);//->name('homepage');
Route::resource('blogs',BlogsController::class);
Route::resource('user',UserController::class);

