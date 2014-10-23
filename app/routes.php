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
	return View::make('main');
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
	$whatIpsum = Input::get('whatIpsum');

		return View::make('viewIpsum')->with('paragNum', $paragNum) ->with('whatIpsum', $whatIpsum);
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

Route::get('/testing', function() 
{

		return View::make('testing');
});

Route::post('viewUser', function()
{
	$userNum = Input::get('userNum');
	$createEmail = Input::get('createEmail');
	$createAddr = Input::get('createAddr');
	$createBio = Input::get('createBio');
	return View::make('viewUser')->with('userNum', $userNum)->with('createEmail', $createEmail)->with('createAddr', $createAddr) ->with('createBio', $createBio);
});


/*
Route::post('viewIpsum', function(){

	$theIpsum = Input::get('parag')
	return View::make('viewIpsum')-->('theIpsum', $theIpsum);
});
*