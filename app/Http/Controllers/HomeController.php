<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\User;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index() //homeの表示
    {
        $user = Auth::user();
        $movie = Movie::orderBy('score','desc')->paginate(3);//ランキングなら評価の平均点のカラムが欲しい
        //レコメンドのデータの受け渡しをお願いします。

        return view('home.index')->with(['user'=>$user,'movies'=>$movie]);
    }//データがないから現時点ではエラー
}
