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

Route::get('/', fn() => redirect('/home'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products');
Route::post('/products/{id}/delete', 'ProductController@deleteProduct')->name('products.delete');
Route::post('/products/create', 'ProductController@createProduct')->name('products.delete');
Route::get('/products/create', fn() => view('product\product-create'))->name('product.create');
