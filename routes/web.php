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

// Route untuk halaman user
Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');
Route::get('/Products', 'Ecommerce\FrontController@product')->name('front.product');
Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/Products/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
Route::post('cart', 'Ecommerce\CartController@addToCart')->name('front.cart');
Route::get('/cart', 'Ecommerce\CartController@listCart')->name('front.list_cart');
Route::post('/cart/update', 'Ecommerce\CartController@updateCart')->name('front.update_cart');
// route::get('/Products/{product}', 'Ecommerce\FrontController@show');
Route::resource('contact', 'ContactController');

Route::resource('about', 'AboutController');






// route untuk halaman admin
Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoryController');



// Route::post('contact', 'ContactController@store');
// Route::get('contact', 'ContactController@index');

Route::resource('blog', 'blogController');

Route::get('/admin', 'adminController@index');
Route::get('/admin/create', 'adminController@create');
Route::post('/admin', 'adminController@store');


Route::get('login2', 'AuthController@getLogin');
Route::post('login2', 'AuthController@postLogin')->name('login2');
Route::post('register', 'AuthController@postRegister');
Route::get('register', 'AuthController@getRegister');
