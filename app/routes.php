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
Route::get('/logout', 'UsersController@logout');
Route::get('/register', 'UsersController@register');
Route::post('/register', 'UsersController@create');
Route::get('/users/{id}', 'UsersController@editUser');
