<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/category/{code}', 'MainController@category')->name('category');
Route::get('/product/{category}/{code?}', 'MainController@product')->name('product');

Route::get('/order-place', 'BasketController@orderPlace')->name('order-place');
Route::post('/order-confirm', 'BasketController@orderConfirm')->name('order-confirm');
Route::get('/basket', 'BasketController@basket')->name('basket');
Route::post('basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
Route::post('basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');


