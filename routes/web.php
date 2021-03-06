<?php

use App\Http\Controllers\api\GetUserController;
use App\Http\Controllers\api\PostRecommendedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieInfoController;
use App\Http\Controllers\MovieSearchController;
use App\Http\Controllers\PointExchangeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewScoreController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserRegistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    return _redirect('/home');
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

Route::apiResource('/api/user/all', GetUserController::class);
Route::apiResource('/api/recommended', PostRecommendedController::class);

Route::apiResource('/signup', UserRegistController::class);
Route::apiResource('/signin', LoginController::class);
Route::apiResource('/search', MovieSearchController::class)->middleware('auth:sanctum');
Route::apiResource('/mypage', UserInfoController::class)->middleware('auth:sanctum');
Route::apiResource('/point/exchange', PointExchangeController::class)->middleware('auth:sanctum');

Route::apiResource('/movie', MovieInfoController::class)->middleware('auth:sanctum');
Route::apiResource('/home', HomeController::class)->middleware('auth:sanctum');
Route::apiResource('/review', ReviewController::class)->middleware('auth:sanctum');
Route::apiResource('/review_score', ReviewScoreController::class)->middleware('auth:sanctum');
Route::any('message', function (Request $request) {
    return view('message');
});
