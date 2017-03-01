<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events',function(){
	return view('events');
});

Auth::routes();

// OAuth Routes
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/Signup','RegisterController@Signup');
=======
Route::get('/home', 'HomeController@index');
>>>>>>> 3392ed875a12192748cc421ddd46ef245a1d18b3
