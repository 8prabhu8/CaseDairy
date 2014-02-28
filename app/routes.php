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

Route::get('/welcome', function()
{
	return View::make('home.index');
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/show', function()
{
	echo "Welcome to webservices";
});

 Route::post('/register',array('as'=>'DoRegister','uses'=>'UserController@DoRegister'));

 		 Route::get('/search',array('as'=>'DoSearch','uses'=>'UserController@search'));



				  Route::post('/login', function()
				{
					$data=Input::all();
					 // print_r($data);

					// echo $data['userName']; 

				   Auth::attempt(
				   	$credential=array(
				   	'username'=>$data['userName'],
				   	'password'=>$data['userPassword']));

				   // echo Auth::attempt($credential);exit;
				   if(Auth::check())
				   {
				   	return "Login Successfull";
				   }
				   else
				   {
				   	return "Login failure";
				   }

				});
