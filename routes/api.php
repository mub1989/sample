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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articals', 'ArticalController@index');
Route::get('articals/{article}', 'ArticalController@show');
Route::post('articals', 'ArticalController@store');
Route::put('articals/{article}', 'ArticalController@update');
Route::delete('articals/{article}', 'ArticalController@destroy');
