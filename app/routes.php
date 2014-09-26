<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.master');
});
Route::resource('posts','PostsController');
Route::resource('users','UsersController');
Route::get('register', ['as' => 'users.register', 'uses' => 'UsersController@register']);
Route::get('login', ['as' => 'users.login', 'uses' => 'UsersController@login']);
Route::post('signin', ['as' => 'users.signin', 'uses' => 'UsersController@signin']);



