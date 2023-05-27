<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::get('ResetController@reset')->name('reset_db');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::middleware(['auth'])->group(function() {
    Route::group([
        'prefix' => 'person'
    ], function() {
        Route::get('/orders', 'Person\OrderController@index')->name('orders.index');
        Route::get('/orders/{order}', 'Person\OrderController@show')->name('orders.show');
    });
    Route::group([
        'prefix' => 'admin',
        /*'namespace' => 'Admin',*/
    ], function(){
        Route::middleware(['is_admin'])->group(function () {
            Route::get('/orders', 'Admin\OrderController@index')->name('home');
            Route::get('/orders/{order}', 'Admin\OrderController@show')->name('orders.show');
            Route::resource('categories', 'Admin\CategoryController');
        });
    });
});
Route::group([
    'middleware' => 'basket_not_empty'
], function(){
    Route::get('/order-place', 'BasketController@orderPlace')->name('order-place');
    Route::post('/order-confirm', 'BasketController@orderConfirm')->name('order-confirm');
    Route::get('/basket', 'BasketController@basket')->name('basket');
    Route::post('basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');
    Route::post('basket/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');
});

Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/category/{code}', 'MainController@category')->name('category');
Route::get('/product/{category}/{code?}', 'MainController@product')->name('product');






