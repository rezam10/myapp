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
Route::get('/', function(){
	$users = DB::table('users')->get();
	return $users;
});
//Route::get('/', 'HomeController@getIndex');
Route::get('about', 'HomeController@getAbout');
Route::get('contact', 'HomeController@getContact');
Route::get('login', 'SessionsController@getLogin');
Route::get('logout', 'SessionsController@logout');
Route::get('register', 'SessionsController@getRegister');


Route::group(array('before' => 'csrf'), function(){
	Route::post('login', 'SessionsController@postLogin');
	Route::post('register', 'SessionsController@postRegister');
	Route::post('contact', 'HomeController@postMail');
});

Route::group(array('before' => 'auth'), function(){
	
	Route::get('admin', 'AdminController@getIndex');
	Route::get('upload', 'AdminController@getUpload');
});

//Route::controller('users', 'UsersController');


