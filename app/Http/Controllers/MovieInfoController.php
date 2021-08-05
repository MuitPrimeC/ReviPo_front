<?php

namespace App\Http\Controllers;

use App\Models\Movie;

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
        return view('movie/index', ['movie' => $movie, 'reviews' => $reviews]);
    }
}
