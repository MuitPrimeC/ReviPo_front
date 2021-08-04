<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieSearchController extends Controller
{

    /**
     * name store
     * desc
     *
     * @queryParam title string Example: イベントタイトル
     */
    public function store(Request $request)
    {
        return view('movielist');
    }

}
