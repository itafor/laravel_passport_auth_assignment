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


Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('signup', 'API\AuthController@signup');
    Route::post('login', 'API\AuthController@login');
    Route::get('user', 'API\AuthController@user');
    Route::post('update/user/{id}', 'API\AuthController@update_user');
    Route::get('logout', 'API\AuthController@logout');
 
});
