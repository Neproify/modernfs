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
Route::get('/topic/{id}/{name?}', 'TopicController@show')->name('topic');
