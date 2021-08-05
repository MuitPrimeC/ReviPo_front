<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieSearchController extends Controller
{

    /**
     * name
     * desc
     */
    public function index(Request $request)
    {
        $valid_dict = [
            'q' => ['required'],
        ];

        $request->validate($valid_dict);
        $search_query = $request->q;
        $limit = $request->has('limit') ? intval($request['limit']) : 10;
        return view('movielist', ['movies' => Movie::whereLike("title", $search_query)->orWhereLike("description", $search_query)->orderBy('score', 'desc')->paginate(10)]);
    }

    /**
     * name store
     * desc
     *
     * @queryParam title string Example: イベントタイトル
     */
    public function show(Request $request)
    {
        $valid_dict = [
            'q' => ['required'],
        ];

        $request->validate($valid_dict);
        $search_query = $request->q;
        $limit = $request->has('limit') ? intval($request['limit']) : 10;
        return view('movielist', ['movies' => Movie::whereLike("title", $search_query)->orWhereLike("description", $search_query)->orderBy('score', 'desc')->paginate(10)]);
    }
}

