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

//Route::get('/', function () {
    //return view('index');
//});

Auth::routes();

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/single-product/{product}', 'FrontendController@singleProduct')->name('singleProduct');

Route::post('cart', 'FrontendController@cartitem')->name('cart');
Route::get('cart-show', 'FrontendController@cartshow')->name('cart.show');
Route::get('cart/delete/{id}', 'FrontendController@cart_delete')->name('cart.delete');
Route::get('cart/incr/{id}/{quantity}', 'FrontendController@incr')->name('cart.incr');
Route::get('cart/decr/{id}/{quantity}', 'FrontendController@decr')->name('cart.decr');
Route::get('cart/checkout', 'FrontendController@checkout')->name('checkout');



Route::get('products/{product}/delete','ProductsController@delete')->name('products.delete');
//Route::get('products/{product}','ProductsController@show')->name('products.show');
Route::resource('products','ProductsController');

