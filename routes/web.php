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

Route::get('/', 'eventController@index');
Route::get('/beta', 'eventController@beta');

Route::post('/getmsg','AjaxController@index');
Route::get('/events',function(){
	return view('events');
});
Route::get('/info',function(){
	return view('info');
});

Route::get('auth/{provider}', 'loginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'loginController@handleProviderCallback');
Route::post('/login','loginController@doLogin');
Route::get('/logout','loginController@logout');
Route::post('/register','registerController@Signup');

Route::post('/register/details','registerController@details');

Route::post('/register/event/{type}','eventController@register');
Route::post('/register/group', 'registerController@group');
//2/3/17
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'registrationController@confirm'
]);
