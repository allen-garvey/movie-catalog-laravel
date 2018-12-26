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

Route::get('genres', 'GenreController@index');
Route::get('genres/{article}', 'GenreController@show');
Route::post('genres', 'GenreController@store');
Route::put('genres/{article}', 'GenreController@update');
Route::delete('genres/{article}', 'GenreController@delete');
