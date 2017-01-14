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

Route::get('/admin', [
    'uses' => 'PagesController@admin',
    'as' => 'admin',
    'middleware' => 'admin'
    ]);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/izvajalci', 'PagesController@izvajalci');
Route::get('/zvrsti', 'PagesController@zanri');
Route::get('/blagajna', 'PagesController@blagajna');
Route::get('/zelje', 'PagesController@zelje');
Route::get('/zgodovina', 'PagesController@zgodovina');
Route::get('/zbirka', [
    'uses' => 'ProductController@getIndex',
    'as' => 'zbirka.index'
]);

Route::get('/artikel/{id}', [
    'uses' => 'ProductController@getProduct',
    'as' => 'product.index'
    ]);
Route::get('/izvajalec/{id}', [
    'uses' => 'PagesController@getArtist',
    'as' => 'artist.index'
    ]);
Route::get('/kosarica', [
    'uses' => 'ProductController@getCart',
    'as' => 'pages.kosarica',
    
]);
Route::get('/dodaj-v-kosarico/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'dodajvkosaro'
]);
Route::get('/dodaj-v-zelje/{id}', [
    'uses' => 'ProductController@getAddToWishlist',
    'as' => 'dodajvzelje'
]);
Route::get('/odstrani/{id}',[
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'odstraniizkosare'
    
]);
Route::get('/odstraninar/{order}/{id}',[
    'uses' => 'ProductController@getRemoveItemOrder',
    'as' => 'odstraniiznarocila'
    
]);
Route::get('/blagajna', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/blagajna', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::get('/nastavitve/{username}', 'UsersController@getAccount');

Route::post('/nastavitve/{username}', [
    'uses' =>'UsersController@update',
    'as' =>'nastavitve'
    ]);
Route::get('/artikelnov', 'ProductController@getArtikelnov');
Route::post('/artikelnov', [
    'uses' =>'ProductController@nov',
    'as' =>'artikelnov',
    'middleware' => 'admin'
    ]);
Route::get('/adminzbirka', [
   'uses' => 'ProductController@getZbirkaadmin',
   'as' => 'adminzbirka',
   'middleware' => 'admin'
    ]);

Route::get('/artikeluredi/{id}', [
    'uses' => 'ProductController@getArtikeluredi',
    'as' => 'artikeluredi',
    'middleware' => 'admin'
    ]);
Route::post('/artikeluredi/{id}', [
    'uses' =>'ProductController@postArtikeluredi',
    'as' =>'artikeluredi',
    'middleware' => 'admin'
    ]);
Route::get('/narocila', [
    'uses' => 'PagesController@narocila',
    'as' => 'narocila',
    'middleware' => 'admin'
    ]);

Route::get('/narocilo/{id}', 
    [
    'uses' => 'PagesController@getNarocilo',
    'as' => 'preglednarocilo',
    'middleware' => 'admin'
    ]);
Route::post('/narocilo/{id}', 
    [
    'uses' => 'PagesController@postNarocilo',
    'as' => 'preglednarocilo',
    'middleware' => 'admin'
    ]);