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

Route::group(['prefix' => 'admin-panel/widgets'],function () {
    Route::group(['middleware' => 'adminauth'], function () {
            
            // user index route
            Route::get('shope','ShopController@index')->name('shope.index');
            // user create route
            Route::get('shope/create','ShopController@create')->name('shope.create');
            Route::post('shope/store','ShopController@store')->name('shope.store');

            // user edit route
            Route::get('shope/edit/{id}','ShopController@edit')->name('shope.edit');
            Route::post('shope/update/{id}','ShopController@update')->name('shope.update');

            // user delete route
            Route::get('shope/destroy/{id}','ShopController@destroy')->name('shope.destroy');

            // customer
            // user index route
            Route::get('customer','CustomerController@index')->name('customer.index');
            // user create route
            Route::get('customer/create','CustomerController@create')->name('customer.create');
            Route::post('customer/store','CustomerController@store')->name('customer.store');

            // user edit route
            Route::get('customer/edit/{id}','CustomerController@edit')->name('customer.edit');
            Route::post('customer/update/{id}','CustomerController@update')->name('customer.update');

            // user delete route
            Route::get('customer/destroy/{id}','CustomerController@destroy')->name('customer.destroy');
    });

});

