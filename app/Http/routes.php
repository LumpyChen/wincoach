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
Route::get('news', 'NewsController@index');
Route::get('abroad', 'AbroadController@index');
Route::get('video', 'VideoController@index');
Route::get('race', 'RaceController@index');
Route::get('data', 'DataController@index');
Route::get('service', 'ServiceController@index');
Route::get('roll', 'RollController@index');
Route::get('article/{id?}','ArticleController@index');

/*
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
 		Route::get('/', 'HomeController@index');
 		Route::get('info', function(){
 			return view('Admin.Info');
 		});
 		Route::get('chpwd', 'ChpwdController@index');
 		Route::resource('user', 'UserController');
 		Route::resource('cate', 'CateController',
 			['except' => ['create','show','index']]);
 			Route::get('cate/{id?}', 'CateController@index');
 			Route::get('cate/create/{id?}', 'CateController@create');
 			Route::get('cate/seton/{id?}', 'CateController@seton');
 			Route::get('cate/setoff/{id?}', 'CateController@setoff');
 		Route::resource('news', 'NewsController');
 		Route::resource('softadv', 'SoftadvController');
 		Route::resource('srvpd', 'SrvpdController');
 		Route::resource('video', 'VideoController');
 		Route::resource('team', 'TeamController');
 		Route::resource('player', 'PlayerController');
 		Route::resource('competition', 'CompController');
 		Route::resource('race', 'RaceController');
});