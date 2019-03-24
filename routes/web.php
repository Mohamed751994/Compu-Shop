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
/* Frontend-Site */
Route::get('/', 'HomeController@index');

/* show product by catgory and manufacture*/
Route::get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');
/* Cart Routes */
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/delete-cart/{rowId}', 'CartController@delete_cart');

/* Customer Login and Logout here ---------  */
Route::post('/customer_login', 'CheckoutController@customer_login');
Route::get('/customer_logout', 'CheckoutController@customer_logout');
Route::post('/customer_register', 'CheckoutController@customer_register');
/* Checkout Routes */
Route::get('/login-check', 'CheckoutController@loginCheck');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/store-shipping-details', 'CheckoutController@store_shipping_details');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/order', 'CheckoutController@order');

Route::get('/manage-order', 'CheckoutController@manage_order');
Route::get('/view-order/{order_id}', 'CheckoutController@view_order');
Route::get('/delete-order/{order_id}', 'CheckoutController@delete_order');

/* Contact US */
Route::get('/contact', 'ContactController@contact');
Route::post('/store-contact', 'ContactController@store_contact');

Route::get('/messages', 'ContactController@message');

//Route::get('/search', 'HomeController@search');


/* Backend-Site (ADMIN)*/

Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'SuperAdminController@logout');




/* Category Routes*/

Route::get('/all-category', 'CategoryController@index');
Route::get('/add-category', 'CategoryController@add');
Route::post('/store-category', 'CategoryController@store');
Route::get('/edit-category/{category_id}', 'CategoryController@edit');
Route::post('/update-category/{category_id}', 'CategoryController@update');
Route::get('/delete-category/{category_id}', 'CategoryController@delete');
Route::get('/unactive_category/{category_id}', 'CategoryController@unactive');
Route::get('/active_category/{category_id}', 'CategoryController@active');



/* Manufacture or Brands Routes*/

Route::get('/all-manufacture', 'ManufactureController@index');
Route::get('/add-manufacture', 'ManufactureController@add');
Route::post('/store-manufacture', 'ManufactureController@store');
Route::get('/edit-manufacture/{manufacture_id}', 'ManufactureController@edit');
Route::post('/update-manufacture/{manufacture_id}', 'ManufactureController@update');
Route::get('/delete-manufacture/{manufacture_id}', 'ManufactureController@delete');
Route::get('/unactive_manufacture/{manufacture_id}', 'ManufactureController@unactive');
Route::get('/active_manufacture/{manufacture_id}', 'ManufactureController@active');



/* Products Routes*/

Route::get('/all-product', 'ProductController@index');
Route::get('/add-product', 'ProductController@add');
Route::post('/store-product', 'ProductController@store');
Route::get('/edit-product/{product_id}', 'ProductController@edit');
Route::post('/update-product/{product_id}', 'ProductController@update');
Route::get('/delete-product/{product_id}', 'ProductController@delete');
Route::get('/unactive_product/{product_id}', 'ProductController@unactive');
Route::get('/active_product/{product_id}', 'ProductController@active');


/* Slider Routes*/

Route::get('/all-slider', 'SliderController@index');
Route::get('/add-slider', 'SliderController@add');
Route::post('/store-slider', 'SliderController@store');
Route::get('/delete-slider/{slider_id}', 'SliderController@delete');
Route::get('/unactive_slider/{slider_id}', 'SliderController@unactive');
Route::get('/active_slider/{slider_id}', 'SliderController@active');