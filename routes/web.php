<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', function () {
    return _redirect('signup');
});

Route::apiResource('/signup', 'App\Http\Controllers\UserRegistController');
Route::apiResource('/signin', 'App\Http\Controllers\LoginController');

Route::apiResource('/home', 'App\Http\Controllers\HomeController')->middleware('auth:sanctum');
Route::apiResource('/review', 'App\Http\Controllers\ReviewController')->middleware('auth:sanctum');
