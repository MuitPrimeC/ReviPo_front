<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Recommended;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() //homeの表示

    {
        $user = Auth::user();
        $movies = Movie::orderBy('score', 'desc')->paginate(3); //ランキングなら評価の平均点のカラムが欲しい
        //レコメンドのデータの受け渡しをお願いします。
        $cnt = 0;
        $max = 3;

        $user_rec = Recommended::where('user_id', Auth::id());
        $recommended = [];
        if ($user_rec->exists()) {
            $movie_ids = explode(',', $user_rec->get()[0]->recommended_movie_ids);
            foreach ($movie_ids as $movie_id) {
                $m = Movie::where('movie_id', $movie_id);
                if (!$m->exists()) {
                    continue;
                }
                $cnt += 1;
                $movie = $m->get()[0];
                array_push($recommended, $movie);
                if ($cnt == 3) {
                    break;
                }
            }
        }

        if ($max - $cnt > 0) {
            foreach (Movie::inRandomOrder()->limit($max - $cnt)->get() as $movie) {
                array_push($recommended, $movie);
            }
        }
        // dd($recommended);
        return view('home.index')->with(['user' => $user, 'movies' => $movies, 'recommended' => $recommended]);
    } //データがないから現時点ではエラー
}
