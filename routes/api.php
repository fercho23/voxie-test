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

Route::middleware('api')->group(function () {
    Route::group(['middleware' => ['cors', 'json.response']], function () {
        Route::post('/login', 'AuthController@login')->name('login.api');
        Route::post('/logout', 'AuthController@logout')->name('logout.api');
    });

    Route::resource('contacts', ContactController::class);
});