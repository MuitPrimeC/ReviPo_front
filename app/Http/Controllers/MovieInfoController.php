<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovieInfoController extends Controller
{
    /**
     * name show
     * desc
     *
     * @urlParam name required Example: admin
     */
    public function show($movie_id)
    {
        $movie = Movie::where('movie_id', $movie_id);
        $reviews = [];
        return view('movie/index', ['movie_id' => $movie_id, 'movie' => $movie, 'reviews' => $reviews]);
    }

    /**
     * name store
     * desc
     *
     * @queryParam title string Example: イベントタイトル
     */
    public function store(Request $request)
    {
        $valid_dict = [
            'movie_id' => ['required', 'exists:movie,movie_id'],
            'title' => [],
            'feature' => [],
            'score' => [],
            'description' => [],
        ];
        $request->validate($valid_dict);
        $data = $request->only(array_keys($valid_dict));
        $data['user_id'] = Auth::id();

        DB::transaction(function () use ($request, $data) {
            Review::insert($data);
            $ave = Movie::where(['movie_id' => $data['movie_id']])->avg("score");
            return _redirect("/ave={$ave}");
        });

        return _redirect("/movie/{$data['movie_id']}");
    }
}
