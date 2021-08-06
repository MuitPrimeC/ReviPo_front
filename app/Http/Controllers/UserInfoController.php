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
            $user_history = history::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->distinct()->select('movie_id'); #->simplePaginate(10);
            // dd($user_history);

            return view('mypage', ['recent_review_movies' => $recent_review_movies, 'tickets' => $review, 'user_histories' => $user_history]);
        }
    }
}
