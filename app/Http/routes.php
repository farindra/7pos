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
//-----------------MASTER ROUTE---------------BEGIN
// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

//API Route
Route::group(['prefix'=>'/api'],function(){
	 //angular route
	Route::post('login/auth','Auth\AuthController@postLogin');
	Route::get('login/destroy','Auth\AuthController@Logout');
});



//-----------------MASTER ROUTE---------------END



//-----------------ADMIN ROUTE ---------------BEGIN
Route::get('admin', ['middleware' => 'auth',  function () {
    return view('admin');
}]);

/*Route::get('admin',  function () {
    return View::make('admin');
});
*/
//-----------------ADMIN ROUTE ---------------END




//-----------------FRONTEND ROUTE ---------------BEGIN
Route::get('/', function () {
    return view('auth/login');
});
//-----------------FRONTEND ROUTE ---------------END