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

Route::get('/raza','api\Raza@getRazas');
Route::get('/inforazas','api\Raza@getInfoRazas');
Route::post('/add-perrito','api\Raza@addPerrito');
Route::delete('/delete-perrito/{id}','api\Raza@deletePerrito');
Route::patch('/edit-perrito','api\Raza@editPerrito');
