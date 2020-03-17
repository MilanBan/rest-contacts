<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::middleware('api')->get('/contacts', 'ContactController@index');
Route::middleware('api')->post('/contacts', 'ContactController@store');
Route::middleware('api')->get('/contacts/{id}', 'ContactController@show');
Route::middleware('api')->put('/contacts/{id}', 'ContactController@update');
Route::middleware('api')->delete('/contacts/{id}', 'ContactController@destroy');