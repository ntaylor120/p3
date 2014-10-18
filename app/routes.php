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
	return View::make('hello');
});

Route::get('/main', function()
{
	return View::make('main');
});

Route::get('/ipsum', function()
{
	return View::make('ipsum');
});

Route::post('viewIpsum', function()
{
	$paragNum = Input::get('parag');
	return View::make('viewIpsum')->with('paragNum', $paragNum);
});



Route::get('/viewIpsum', function()
{
	return View::make('viewIpsum');
});

Route::get('/userGen', function()
{

	return View::make('userGen');
});

Route::get('/viewUser', function() 
{

		return View::make('viewUser');
});


/*
Route::post('viewIpsum', function(){

	$theIpsum = Input::get('parag')
	return View::make('viewIpsum')-->('theIpsum', $theIpsum);
});
*