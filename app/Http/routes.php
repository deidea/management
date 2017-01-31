<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', function () {
	if (Auth::check()) {
		return redirect('projects');
	}
	return redirect('login');
});

Route::resource('customers', 'CustomerController');
Route::get('customers/{customer}/delete', 'CustomerController@delete');

Route::resource('projects', 'ProjectController');
Route::get('projects/{project}/delete', 'ProjectController@delete');
