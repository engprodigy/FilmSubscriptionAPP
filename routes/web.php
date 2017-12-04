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
//Route::get(' /films/{id}', function($id)
//{
    /*$names = array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );    
    return array($id => $names[$id]);*/
//});

Route::get('/films', 'FilmController@index')->name('film');
Route::get('/films/listtocomment', 'FilmController@listallfilm')->name('listfilm');
Route::get('/films/film-slug-{name}', 'FilmController@getfilmbyslugname');
//Route::get('/films/film-slug-name', 'FilmController@getfilmbyname');
//Route::post('/films/film-slug-name', 'FilmController@getfilmbyname');
Route::get('/films/comments/{film_id}', 'FilmController@comments');
Route::post('/films/comments/{film_id}', 'FilmController@postcomments');
//Route::get('/film', 'FormController@index');
//Route::post('/films/create', 'FilmController@submitform');
Route::get('/films/create', 
  ['as' => 'createfilm', 'uses' => 'FormController@index']);
Route::post('/films/create', 
  ['as' => 'film_save', 'uses' => 'FormController@submitform']);


//Route::get('/', function () {
   // return view('welcome');
//  return view('home');
//});

//Route::get('/home', function () {
//   return view('welcome');
//});

/*Route::get('/product', 'PagesController@product');*/
Route::get('/product', 'ProductsController@index');
//Route::get('/product_add_to_cart', 'ProductsController@add_to_cart');
Route::get('/product_add_to_cart_meatpie/product', 'ProductsController@add_to_cart_meatpie');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
