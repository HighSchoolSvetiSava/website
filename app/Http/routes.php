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

Route::resource('user', 'UserController');

Route::get('/', 'PageController@index');

Route::resource('page', 'PageController');

Route::resource('session', 'SessionController');

Route::get('/logout', 'SessionController@destroy');