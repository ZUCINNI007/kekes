<?php


Route::get('/', function () {
    return view('welcome');
});


/**
 * @TASKS
 * routs to the views with fetching data from DB (ONLY FOR THE TASKS)
 */

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


/**
 * @POSTS
 */

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');


/**
 * @COMMENTS
 */

Route::post('/posts/{post}/comments', 'CommentsController@store');


// Eloquent model => Post

// controller => PostsController

// migration => create_posts_table


/**
 * @posts
 *
 * @GET /posts
 * @GET /posts/create
 * @POST /posts
 * @GET /posts/{id}/edit
 * @GET /posts/{id}
 * @PATCH /posts/{id}
 * @DELETE /posts/{id}
 */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
