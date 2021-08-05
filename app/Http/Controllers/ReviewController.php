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
        $movie = Movie::orderBy('score', 'desc')->paginate(10); //ランキングなら評価の平均点のカラムが欲しい
        // $recommended = Movie::orderBy('')
        return view('review.index')->with(['user' => $user, 'movies' => $movie]);
    }

}
