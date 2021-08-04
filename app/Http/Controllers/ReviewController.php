<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\User;
use App\Models\Movie;

class ReviewController extends Controller
{
     public function index() //review一覧の表示
    {
        $user = Auth::user();
        $movie = Movie::orderBy('updated_at','desc')->paginate(5);//ランキングなら評価の平均点のカラムが欲しい
        $review = $movie->review;

        return view('review.index')->with(['user'=>$user,'movies'=>$movie,'reviews'=>$review]);//paginateで個数指定
    }//データがないから現時点ではエラー
}
