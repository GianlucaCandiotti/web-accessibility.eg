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

Route::get('/', array('as' => 'home', 'uses' => function()
{
	return View::make('home');
}));

Route::get('/sign-up', array('as' => 'signup', 'uses' => function()
{
	return View::make('signup');
}));

Route::get('/sign-in', array('as' => 'signin', 'uses' => function()
{
	return View::make('signin');
}));

Route::get('/courses', array('as' => 'courses', 'uses' => function()
{
	return View::make('courses');
}));