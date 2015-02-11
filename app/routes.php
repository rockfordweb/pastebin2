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

Route::get('/', 'PastesController@index');

Route::get('/recent', 'PastesController@recent');

Route::get('/paste/{id}', 'PastesController@show');

Route::post('/new', 'PastesController@create');

Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@loginPOST');
Route::get('/logout', 'UsersController@logout');
Route::get('/register', 'UsersController@register');
Route::post('/register', 'UsersController@registerPOST');
Route::get('/users/{id}', 'UsersController@editUser');
Route::post('/users/update', 'UsersController@updateUser');