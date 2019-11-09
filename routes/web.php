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


Route::get('/productshow', 'PageController@productshow')->name('product');
Route::get('/', 'PageController@home')->name('home');


Route::group(['prefix' => 'adminpanel'], function () {
	Route::get('/', 'AdminController@index')->name('admin.index');
	Route::get('/product/create', 'ProductController@create')->name('product.create');
	Route::post('/product/store', 'ProductController@store')->name('product.store');
	Route::get('/product/index', 'ProductController@index')->name('product.index');
	Route::get('/product/{id}', 'ProductController@show')->name('product.show');
	Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
	Route::put('/product/{id}', 'ProductController@update')->name('product.update');
	Route::delete('/product/{id}', 'ProductController@destroy')->name('product.delete');
});


	