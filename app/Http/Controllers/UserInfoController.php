<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        $recent_review_movies = Auth::user()->reviews->all();
        $d = Ticket::where('user_id', Auth::id());
        if ($d->exists()) {
            $review = $d->get();
        } else {
            $review = [];
        }
        $user_histories = History::where('user_id', Auth::id());
        $movie_ids = [];
        foreach ($user_histories->get() as $u) {
            if (!in_array($u->movie_id, $movie_ids)) {
                array_push($movie_ids, $u->movie_id);
            }
        }
        $user_history = [];
        if ($movie_ids != []) {
            $user_history = History::whereIn('movie_id', $movie_ids)->orderBy('updated_at', 'desc')->simplePaginate(10);
        }
        // dd($user_history);
        // dd($movie_ids);

        return view('mypage', ['recent_review_movies' => $recent_review_movies, 'tickets' => $review, 'user_histories' => $user_history]);
    }
}
