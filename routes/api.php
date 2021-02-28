<?php

use App\Models\Post;
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

// Alaki
Route::get('test', function () {
    return 'Working  Smoothly';
});

// Alaki
/*Route::get('json', function () {
    return ["message" => 'Returning JSON'];
});*/

// Posts

// A CRUD project contains:
// 1. Get all (GET) /api/posts
// 2. Create a post (POST) /api/posts
// 3. Get a single (GET) /api/posts/{id}
// 4. Update a single (PUT/PATCH) /api/posts/{id}
// 5. Delete (DELETE) /api/posts/{id}

//Route::resource('posts', 'PostController');
/*Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store');
Route::put('/posts', 'PostController@update');
Route::delete('/posts', 'PostController@destroy');*/

// To create a resource in laravel (post)
// 1. Create the database and migrations
// 2. Create a model
// 2.5 Create a service (Eloquent ORM)
// 3. Create a controller to get info from the database
// 4. Return the info

/*Route::get('/posts', function () {
    $post = Post::create([
        'title' => 'my first post',
        'slug' => 'my_first_post'
    ]);
    return $post;
});*/

/*Route::post('/posts');
Route::put('/posts/{id}');
Route::delete('/posts/{id}');*/

// Trying new systme for API
/*Route::get('/posts', 'App\Http\Controllers\PostController@index');
Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::get('/posts', 'App\Http\Controllers\PostController@show');
Route::put('/posts', 'App\Http\Controllers\PostController@update');
Route::delete('/posts', 'App\Http\Controllers\PostController@destroy');*/

// Newest shortest way to write it
Route::prefix('v1')->group(function () {
    Route::apiResource('posts', 'App\Http\Controllers\PostController');
});
