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
Route::get('/product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');



Route::resource('products', 'ProductController')->except(['show']);

Route::resource('abouts', 'AboutController');




// route untuk halaman admin
Route::post('contact', 'ContactController@store');
Route::get('contact', 'ContactController@index');

Route::resource('blog', 'blogController');

Route::get('/admin', 'adminController@index');
Route::get('/admin/create', 'adminController@create');
Route::post('/admin', 'adminController@store');


Route::get('login2', 'AuthController@getLogin');
Route::post('login2', 'AuthController@postLogin')->name('login2');
Route::get('register', 'AuthController@getRegister');
Route::post('register', 'AuthController@postRegister')->name('register');
