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

Route::middleware('auth:api')->get('/productcategory', function (Request $request) {
    return $request->user();
});

Route::group([
//    'middleware' => 'api',
    'prefix' => 'cms/product-categories'
], function ($router) {
    Route::get('/', 'ProductCategoryCmsController@index');
    Route::post('/', 'ProductCategoryCmsController@store');
    Route::get('/{id}', 'ProductCategoryCmsController@show')->where(['id' => '[0-9]+']);
    Route::put('/{id}', 'ProductCategoryCmsController@update')->where(['id' => '[0-9]+']);
    Route::delete('/{id}', 'ProductCategoryCmsController@destroy')->where(['id' => '[0-9]+']);
});

