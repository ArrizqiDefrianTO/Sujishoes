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

Route::resource('/', 'PagesController');
Route::resource('about', 'AboutController');
Route::resource('shop', 'ShopController');
Route::resource('contact', 'ContactController');
Route::resource('blog', 'blogController');
