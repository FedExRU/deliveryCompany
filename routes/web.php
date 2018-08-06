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

Route::get('/', 'HomeController@index')->name('home');


Route::resource('catalog', 'CatalogController', ['except' => [
    'create', 'store', 'update', 'destroy', 'edit'
]]);

Route::post('order', 'OrderController@store')->name('order.send');

Route::get('status/{order?}', 'OrderController@status')->name('order.status');

Route::post('order/modal', 'WidgetController@order')->name('order.modal');

Route::post('order/success', 'WidgetController@orderSuccess')->name('order.success');