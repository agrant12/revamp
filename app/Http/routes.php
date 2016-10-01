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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => '/admin'], function() {
	Route::get('/', 'AdminController@index');
	Route::get('/photography', array('as' => 'admin.photography',  'uses' => 'AdminController@photography'));
	Route::get('/development', array('as' => 'admin.development',  'uses' => 'AdminController@development'));
	Route::get('/blog', array('as' => 'admin.blog',  'uses' => 'AdminController@blog'));
	Route::get('/profile', array('as' => 'admin.profile',  'uses' => 'AdminController@profile'));
	Route::get('/contact', array('as' => 'admin.contact',  'uses' => 'AdminController@contact'));
});
