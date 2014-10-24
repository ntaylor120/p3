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


/* / ROUTE */

Route::get('/', function()
{
	return View::make('main');
});

/* MAIN ROUTE */

Route::get('/main', function()
{
	return View::make('main');
});

/* IPSUM CREATE */

Route::get('/ipsum', function()
{
	return View::make('ipsum');
});

/* IPSUM VIEW */

Route::post('viewIpsum', function()
{
	$paragNum = Input::get('parag');
	$whatIpsum = Input::get('whatIpsum');

		return View::make('viewIpsum')->with('paragNum', $paragNum) ->with('whatIpsum', $whatIpsum);
});

/* ROUTE TO VIEW viewIpsum page w/out going through ipsum generation */

Route::get('/viewIpsum', function()
{
	return View::make('viewIpsum');
});

/* USER CREATE */

Route::get('/userGen', function()
{

	return View::make('userGen');
});

/* ROUTE TO VIEW viewUser w/out going through user generation page */

Route::get('/viewUser', function() 
{

		return View::make('viewUser');
});

/* USER VIEW */

Route::post('viewUser', function()
{
	$userNum = Input::get('userNum');
	$createEmail = Input::get('createEmail');
	$createAddr = Input::get('createAddr');
	$createBio = Input::get('createBio');
	return View::make('viewUser')->with('userNum', $userNum)->with('createEmail', $createEmail)->with('createAddr', $createAddr) ->with('createBio', $createBio);
});


/* testing sandbox */

Route::get('/testing', function() 
{

		return View::make('testing');
});



/*

TESTING ROUTES

Route::post('testing', function()
{
			
			 $lipsum = new joshtronic\KittenIpsum();
			 $lipsum->paragraphs(5, 'p');
	 			

		return View::make('testing')->with('lipsum', $lipsum);
});



Route::post('viewIpsum', function(){

	$theIpsum = Input::get('parag')
	return View::make('viewIpsum')-->('theIpsum', $theIpsum);
});
*