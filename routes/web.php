<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});


Route::group(["middleware"=>"auth"], function(){
    # Route::post('/comment/create/{post_id}', '\App\Http\Controllers\CommentController@create'); 
    # Route::delete('/comment/destroy/{comment_id}', '\App\Http\Controllers\CommentController@destroy');
    # Route::resource('/comment', '\App\Http\Controllers\CommentController');
    Route::resource('/posts', '\App\Http\Controllers\PostsController');
    Route::get('/users/index', '\App\Http\Controllers\UsersController@index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
