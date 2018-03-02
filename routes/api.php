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
// Api key abfd9e5167d18459674c6cd94c7020394a833808
Route::middleware('auth:apikey')->get('/user', function (Request $request) {
    //echo "hello";
    return $request->user();
});

Route::resource('topics', 'Api\TopicsController');
Route::resource('platform', 'Api\PlatformsController');
