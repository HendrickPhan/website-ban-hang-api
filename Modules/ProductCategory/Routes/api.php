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
    'prefix' => 'cms/product-categories'
], function ($router) {
    Route::get('/', 'ProductCategoryController@index');
    Route::post('/', 'ProductCategoryController@store');
    Route::get('/{id}', 'ProductCategoryController@show')->where(['id' => '[0-9]+']);
    Route::put('/{id}', 'ProductCategoryController@update')->where(['id' => '[0-9]+']);
    Route::delete('/{id}', 'ProductCategoryController@destroy')->where(['id' => '[0-9]+']);
});

