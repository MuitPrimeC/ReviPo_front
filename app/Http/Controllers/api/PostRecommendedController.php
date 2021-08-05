<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Recommended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRecommendedController extends Controller
{
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
        // if(!Gate::allows(, $request->group_id)){
        //     return ['code' => 403];
        // }
        // return ::insert(data);
        $r = Recommended::where(['user_id' => Auth::id()]);
        if ($r->exists()) {
            $r->update([
                'recommended_movie_ids' => $r->recommended_movie_ids,
            ]);
        } else {
            Recommended::insert(['user_id' => Auth::id(), 'recommended_movie_ids' => $request->recommended_movie_ids]);
        }
    }

}