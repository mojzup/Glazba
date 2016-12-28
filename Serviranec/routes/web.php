<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/zbirka', 'PagesController@zbirka');
Route::get('/izvajalci', 'PagesController@izvajalci');
Route::get('/zvrsti', 'PagesController@zanri');
Route::get('/kosarica', 'PagesController@kosarica');
Route::get('/blagajna', 'PagesController@blagajna');
Route::get('/zelje', 'PagesController@zelje');
Route::get('/zgodovina', 'PagesController@zgodovina');
Route::get('/nastavitve', 'PagesController@nastavitve');

