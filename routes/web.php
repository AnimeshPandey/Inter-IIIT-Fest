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



 Route::post('/getmsg','AjaxController@index');

Route::get('/events',function(){
	return view('events');
});

Route::get('/info',function(){
	return view('info');
});

Auth::routes();

// OAuth Routes

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::post('/login','Auth\LoginController@doLogin');


Route::post('/register','Auth\RegisterController@Signup');

Route::get('/home', 'HomeController@index');
