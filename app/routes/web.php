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

// Route::get('/', function () {
//    return view('shop');
// });

// Auth::routes();

// Route::get('/', 'ShopController@index');
// Route::POST('/cartdelete','ShopController@deleteCart');
// Route::get('/mycart', 'ShopController@myCart')->middleware('auth');
// Route::get('/mycart', 'ShopController@myCart');
// Route::post('/mycart', 'ShopController@addMycart');
// Route::POST('/cartdelete','ShopController@deleteCart');
// Route::post('/checkout', 'ShopController@checkout');//10/17追加

Route::get('/', 'ShopController@index');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/mycart', 'ShopController@myCart');
    Route::post('/mycart', 'ShopController@addMycart');
    Route::post('/cartdelete', 'ShopController@deleteCart');
    Route::post('/checkout', 'ShopController@checkout');
   
});

Auth::routes();