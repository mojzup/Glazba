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
Route::get('/izvajalci', 'PagesController@izvajalci');
Route::get('/zvrsti', 'PagesController@zanri');
Route::get('/kosarica', [
	'uses' => 'PagesController@kosarica',
	'as' => 'kosarica',
	'middleware' => 'auth'
	]);
Route::get('/blagajna', 'PagesController@blagajna');
Route::get('/zelje', 'PagesController@zelje');
Route::get('/zgodovina', 'PagesController@zgodovina');
Route::get('/nastavitve', 'PagesController@nastavitve');
/*Route::get('/artikel', [
	'uses' => 'ProductController@getIndex',
	'as' => 'artikel'
	]);*/
Route::get('/zbirka', [
    'uses' => 'ProductController@getIndex',
    'as' => 'zbirka.index'
]);
Route::get('/kosarica', [
    'uses' => 'ProductController@getCart',
    'as' => 'pages.kosarica'
]);
Route::get('/dodaj-v-kosarico/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'dodajvkosaro'
]);
Route::get('/blagajna', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::post('/blagajna', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

