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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/category/{code}', 'MainController@category')->name('category');
Route::get('/product/{product?}', 'MainController@product')->name('product');
