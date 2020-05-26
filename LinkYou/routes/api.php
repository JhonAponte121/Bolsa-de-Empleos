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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//show all jobs
Route::get('Jobs', "PostController@index");
//list one Job
Route::get('Job/{id}','PostController@show');
//Create post 
Route::post('create/Job','PostController@store');
//Update/Edit
Route::put('create/Job','PostController@store');
//Delete Article
Route::delete('Job/{id}','PostController@destroy');