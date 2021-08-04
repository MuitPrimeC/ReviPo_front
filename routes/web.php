<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
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

Route::apiResource('signup', 'App\Http\Controllers\UserRegistController');
Route::apiResource('signin', 'App\Http\Controllers\LoginController');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);

Route::apiResource('test', 'App\Http\Controllers\TestController')->middleware('auth:sanctum');
