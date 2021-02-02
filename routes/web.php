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

//Routes for main application pages
Route::get('/', 'PageController@home')->name('home');
Route::get('/products', 'PageController@productshow')->name('product');
Route::get('/product/{slug}', 'PageController@productdetails')->name('product.details');
Route::get('/search', 'PageController@search')->name('search');
Route::get('/category', 'PageController@category')->name('category');
Route::get('/category/{id}', 'PageController@categoryfind')->name('category.find');
Route::post('/addtocart', 'PageController@addToCart')->name('poroduct.addToCart');


Route::group(['prefix' => 'adminpanel'], function () {
	//Routes for admin
	Route::get('/', 'AdminController@index')->name('admin.index');
	//Routes for Product
	Route::get('/product/create', 'ProductController@create')->name('product.create');
	Route::post('/product/store', 'ProductController@store')->name('product.store');
	Route::get('/product/index', 'ProductController@index')->name('product.index');
	Route::get('/product/{id}', 'ProductController@show')->name('product.show');
	Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
	Route::put('/product/{id}', 'ProductController@update')->name('product.update');
	Route::delete('/product/{id}', 'ProductController@destroy')->name('product.delete');



	//Routes for Category
	Route::get('/category/index', 'CategoryController@index')->name('category.index');
	Route::get('/category/create', 'CategoryController@create')->name('category.create');
	Route::post('/category/store', 'CategoryController@store')->name('category.store');
	Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
	Route::put('/category/{id}', 'CategoryController@update')->name('category.update');
	Route::delete('/category/{id}', 'CategoryController@destroy')->name('category.delete');
});


	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'PageController@login')->name('login')->middleware('guest');
Route::get('/register', 'PageController@register')->name('register')->middleware('guest');
Route::get('/password/reset', 'PageController@reset')->name('password.request');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/dashboard/{slug}/edit', 'DashboardController@edit')->name('dashboard.edit')->middleware('auth');
