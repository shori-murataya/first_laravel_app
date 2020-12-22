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

Route::get('/posts/create',function () {
    return view('posts/create');
});
Route::get('/posts/index', '\App\Http\Controllers\PostsController@index');
Route::get('/posts/show/{post_id}', '\App\Http\Controllers\PostsController@show');
Route::post('/posts/store', '\App\Http\Controllers\PostsController@store');
Route::delete('/posts/destroy/{post_id}', '\App\Http\Controllers\PostsController@destroy'); #{ post_id }はNotFoundになる
Route::get('/posts/edit/{post_id}', '\App\Http\Controllers\PostsController@edit');
Route::post('/posts/update/{post_id}', '\App\Http\Controllers\PostsController@update');
Route::post('posts/comment_store/{post_id}', '\App\Http\Controllers\PostsController@comment_store' );
Route::delete('posts/comment_destroy/{comment_id}', '\App\Http\Controllers\PostsController@comment_destroy' );

Route::get('/users/index', '\App\Http\Controllers\UsersController@index'); #コントローラーのアクション指定
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
