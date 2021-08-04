<?php

namespace App\Http\Controllers;

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
        return view('movie/index');
    }
}
