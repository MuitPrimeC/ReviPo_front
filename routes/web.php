<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieInfoController;
use App\Http\Controllers\MovieSearchController;
use App\Http\Controllers\PointExchangeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserRegistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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
    return view('link');
    // return _redirect('signup');
});
Route::any('/login', function () {
    return _redirect('signin');
})->name('login');

Route::any('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return _redirect('signin');
});

Route::apiResource('/signup', UserRegistController::class);
Route::apiResource('/signin', LoginController::class);
Route::apiResource('/search', MovieSearchController::class)->middleware('auth:sanctum');
Route::apiResource('/mypage', UserInfoController::class)->middleware('auth:sanctum');
Route::apiResource('/point/exchange', PointExchangeController::class)->middleware('auth:sanctum');

Route::apiResource('/movie', MovieInfoController::class)->middleware('auth:sanctum');
Route::apiResource('/home', HomeController::class)->middleware('auth:sanctum');
Route::apiResource('/review', ReviewController::class)->middleware('auth:sanctum');
