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
Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');
Route::get('/product', 'Ecommerce\FrontController@product')->name('front.product');
Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
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

// member verification email
Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function() {
    Route::get('verify/{token}', 'FrontController@verifyCustomerRegistration')->name('customer.verify');
});

// login form
Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function() {
    Route::get('login', 'LoginController@loginForm')->name('customer.login'); //TAMBAHKAN ROUTE INI
    Route::get('verify/{token}', 'FrontController@verifyCustomerRegistration')->name('customer.verify');
});

Route::post('login', 'LoginController@login')->name('customer.post_login');

// customer dashboard
Route::group(['middleware' => 'customer'], function() {
    Route::get('dashboard', 'LoginController@dashboard')->name('customer.dashboard');
});

// middleware login
Route::group(['middleware' => 'customer'], function() {
    Route::get('dashboard', 'LoginController@dashboard')->name('customer.dashboard');
    Route::get('logout', 'LoginController@logout')->name('customer.logout'); //TAMBAHKAN BARIS INI
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'Ecommerce\CartController@checkout')->name('front.checkout');
Route::post('/checkout', 'Ecommerce\CartController@processCheckout')->name('front.store_checkout');
Route::get('/checkout/{invoice}', 'Ecommerce\CartController@checkoutFinish')->name('front.finish_checkout');

Auth::routes();

//JADI INI GROUPING ROUTE, SEHINGGA SEMUA ROUTE YANG ADA DIDALAMNYA
//SECARA OTOMATIS AKAN DIAWALI DENGAN administrator
//CONTOH: /administrator/category ATAU /administrator/product, DAN SEBAGAINYA
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home'); //JADI ROUTING INI SUDAH ADA DARI ARTIKEL SEBELUMNYA TAPI KITA PINDAHKAN KEDALAM GROUPING

    //INI ADALAH ROUTE BARU
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('product', 'ProductController');
});


//Route Search
Route::get('/search', 'Ecommerce\FrontController@search')->name('front.search');
Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
Route::post('/cart', 'Ecommerce\CartController@addToCart')->name('front.cart');
Route::get('/cart', 'Ecommerce\CartController@listCart')->name('front.list_cart');
Route::post('/cart/update', 'Ecommerce\CartController@updateCart')->name('front.update_cart');
Route::get('/checkout', 'Ecommerce\CartController@checkout')->name('front.checkout');
Route::post('/checkout', 'Ecommerce\CartController@processCheckout')->name('front.store_checkout');
Route::get('/checkout/{invoice}', 'Ecommerce\CartController@checkoutFinish')->name('front.finish_checkout');

Auth::routes();
