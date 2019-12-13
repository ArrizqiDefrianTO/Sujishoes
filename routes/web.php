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
route::get('/Products', 'ProductsController@index');

route::get('/Products/{{id}}', 'ProductsController@show');

Route::resource('about', 'AboutController');

// route::get('/students', 'StudentsController@index');
// route::get('/students/create', 'StudentsController@create');
// route::get('/students/{student}', 'StudentsController@show');
// route::post('/students', 'StudentsController@store');
// Route::get('/Products', 'ProductsController@index');
// Route::get('/Products/', 'ProductsController@show');

Route::resource('Products', 'ProductsController');
Route::resource('contact', 'ContactController');
Route::resource('blog', 'blogController');
Route::get('login2', 'AuthController@getLogin');
Route::post('login2', 'AuthController@postLogin')->name('login2');
Route::get('register2', 'AuthController@getRegister');
Route::post('register2', 'AuthController@postRegister')->name('register2');
