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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    /**
    * User Routes
    */
    Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });

    /**
    * User Routes
    */
    Route::group(['prefix' => 'products'], function() {
            Route::get('/', 'ProductController@index')->name('products.index');
            Route::get('/create', 'ProductController@create')->name('products.create');
            Route::post('/create', 'ProductController@store')->name('products.store');
            Route::get('/{user}/show', 'ProductController@show')->name('products.show');
            Route::get('/{user}/edit', 'ProductController@edit')->name('products.edit');
            Route::patch('/{user}/update', 'ProductController@update')->name('products.update');
            Route::delete('/{user}/delete', 'ProductController@destroy')->name('products.destroy');
    });
});
