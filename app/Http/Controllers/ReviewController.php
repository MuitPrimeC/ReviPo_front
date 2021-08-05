<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index() //review一覧の表示

    {
        $user = Auth::user();
        $movie = Movie::orderBy('updated_at', 'desc')->paginate(5); //ランキングなら評価の平均点のカラムが欲しい
        // $review = $movie->review();
        $review = [];

        return view('review.index')->with(['user' => $user, 'movies' => $movie, 'reviews' => $review]); //paginateで個数指定
    } //データがないから現時点ではエラー
}
