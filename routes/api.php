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
// ------------------------------------------
// ------------------Home--------------------
Route::get('/publications/{category}', 'PublicationController@categories');
// ------------------------------------------
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', 'UserController@findAll');
    Route::get('/user', 'UserController@findOne');
    Route::get('/profile/{name}', 'UserController@showProfile');
    Route::get('/profile/mini/{name}', 'UserController@showProfileforAdmin');
    Route::put('/profile', 'UserController@updateProfile');
    Route::delete('/profile/{name}', 'UserController@destroy');
    //   -----------------------------------------------------
    Route::middleware(['permission:USER'])->group(function () {
        //   -----------------------------------------------------
        Route::get('/products', 'ProductController@index');
        Route::get('/products/{id}', 'ProductController@show');
        Route::post('/products', 'ProductController@store');
        Route::post('/products/{id}', 'ProductController@update');
        Route::delete('/products/{id}', 'ProductController@destroy');
        //   -----------------------------------------------------
        Route::get('/offers', 'OfferController@index');
        Route::get('/offers/{id}', 'OfferController@show');
        Route::post('/offers', 'OfferController@store');
        Route::delete('/offers/{id}', 'OfferController@destroy');
        //   -----------------------------------------------------
        Route::get('/publication/{state}', 'PublicationController@index');
        Route::get('/publication/detail/{id}', 'PublicationController@show');
        Route::post('/publication', 'PublicationController@store');
        Route::post('/publication/update/{id}', 'PublicationController@update');
        Route::delete('/publication/delete/{id}', 'PublicationController@destroy');
        //   -----------------------------------------------------
        Route::post('/categoria', 'CategoriaController@store');
    });

});
