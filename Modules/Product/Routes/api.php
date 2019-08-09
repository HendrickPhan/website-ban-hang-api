<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'authCheck',
    'prefix' => 'cms/products'
], function ($router) {
    Route::get('/', 'ProductController@index');
    Route::post('/', 'ProductController@store');
    Route::get('/{id}', 'ProductController@show')->where(['id' => '[0-9]+']);
    Route::put('/{id}', 'ProductController@update')->where(['id' => '[0-9]+']);
    Route::delete('/{id}', 'ProductController@destroy')->where(['id' => '[0-9]+']);
});