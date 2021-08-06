<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Recommended;
use Illuminate\Http\Request;

class PostRecommendedController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return Recommended::all();
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
            'user_id' => ['numeric', 'required', 'exists:user,user_id'],
            'recommended_movie_ids',
        ];
        $request->validate($valid_dict);
        $data = $request->only(array_keys($valid_dict));
        $valid_arr = [];
        foreach (explode(',', $request->recommended_movie_ids) as $movie_id) {
            if (Movie::where('movie_id', $movie_id)->exists()) {
                array_push($valid_arr, $movie_id);
            }
        }
        if ($valid_arr == []) {
            $valid_str = "";
        } else {
            $valid_str = implode(',', $valid_arr);
        }
        $r = Recommended::where(['user_id' => $request->user_id]);
        if ($r->exists()) {
            $r->update([
                'recommended_movie_ids' => $valid_arr,
            ]);
        } else {
            Recommended::insert(['user_id' => $request->user_id, 'recommended_movie_ids' => $valid_arr]);
        }
    }

}
