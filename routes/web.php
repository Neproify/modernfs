<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'ForumController@index')->name('index');
Route::get('/forum/{id}/{name?}', 'ForumController@show')->name('forum');

Route::get('/topic/new/{forum}', 'TopicController@createForm')->name('topic.new');
Route::post('/topic/new', 'TopicController@create');
Route::get('/topic/{id}/{name?}', 'TopicController@show')->name('topic');

Route::get('/post/new/{topic}', 'PostController@createForm')->name('post.new');
Route::post('/post/new', 'PostController@create');

Route::get('/user/{id}/{name?}', 'UserController@profile')->name('profile');
