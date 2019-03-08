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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/provider', 'ProviderController@index')->name('provider');
Route::post('/provider/product', 'ProviderController@update')->name('provider.product.update');


Route::get('/customer', 'CustomerController@index')->name('customer');

Route::get('/customer/product', 'CustomerController@update')->name('customer.product.buy');


Route::get('/inventory', 'InventoryController@index')->name('inventory');
