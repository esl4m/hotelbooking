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

Route::get('hotels', 'HotelController@index')->defaults('api', 'true');  // adds api defaults to check by it in controller
Route::get('hotels/{id}', 'HotelController@show')->defaults('api', 'true');
Route::post('hotels', 'HotelController@store')->defaults('api', 'true');
Route::put('hotels/{id}', 'HotelController@update')->defaults('api', 'true');
Route::delete('hotels/{id}', 'HotelController@destroy')->defaults('api', 'true');

Route::get('customers', 'CustomerController@index');
Route::get('customers/{id}', 'CustomerController@show');
Route::post('customers', 'CustomerController@store');
Route::put('customers/{id}', 'CustomerController@update');
Route::delete('customers/{id}', 'CustomerController@destroy');
