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

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::post('/send-reset-password', 'AuthController@sendResetPassword');
Route::post('/verify-otp', 'AuthController@verifyOTP');
Route::post('/reset-password', 'AuthController@resetPassword');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', 'UserController@findAll');
    Route::get('/profile/{name}', 'UserController@showProfile');
    Route::put('/profile/{name}', 'UserController@updateProfile');
    Route::delete('/profile/{name}', 'UserController@destroy');
    //   -----------------------------------------------------
    Route::middleware(['permission:USER'])->group(function () {
        Route::get('/publication/{state}', 'PublicationController@index');
        // Route::get('/publication/one/{id}')
        Route::post('/publication', 'PublicationController@store');
        // Route::put('/publication')
        // Route::delete('/publication')
    });

    //   -----------------------------------------------------
});
