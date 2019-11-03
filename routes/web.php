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


Route::get('/product-all', 'ProductController@index')->name('product');
Route::get('/', 'PageController@home')->name('home');


Route::group(['prefix' => 'adminpanel'], function () {
	Route::get('/', 'AdminController@index')->name('admin.index');
	Route::get('/product/create', 'ProductController@create')->name('product.create');
	Route::post('/product/store', 'ProductController@store')->name('product.store');
});