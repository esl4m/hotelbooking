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

Route::get('customers', 'CustomerController@index')->defaults('api', 'true');
Route::get('customers/{id}', 'CustomerController@show')->defaults('api', 'true');
Route::post('customers', 'CustomerController@store')->defaults('api', 'true');
Route::put('customers/{id}', 'CustomerController@update')->defaults('api', 'true');
Route::delete('customers/{id}', 'CustomerController@destroy')->defaults('api', 'true');

Route::get('rooms', 'RoomController@index')->defaults('api', 'true');
Route::get('rooms/{id}', 'RoomController@show')->defaults('api', 'true');
Route::post('rooms', 'RoomController@store')->defaults('api', 'true');
Route::put('rooms/{id}', 'RoomController@update')->defaults('api', 'true');
Route::delete('rooms/{id}', 'RoomController@destroy')->defaults('api', 'true');
