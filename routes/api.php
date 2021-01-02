<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
#Route::group(["middleware" => "auth.api"],function(){
    Route::get('/comment','\App\Http\Controllers\CommentController@get');
    Route::post('/comment/{post_id}','\App\Http\Controllers\CommentController@post');
#});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
