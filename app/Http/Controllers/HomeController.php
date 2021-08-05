<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() //homeの表示

    {
        $user = Auth::user();
        $movie = Movie::orderBy('score', 'desc')->paginate(3); //ランキングなら評価の平均点のカラムが欲しい
        //レコメンドのデータの受け渡しをお願いします。

        return view('home.index')->with(['user' => $user, 'movies' => $movie, 'recommende']);
    } //データがないから現時点ではエラー
}
