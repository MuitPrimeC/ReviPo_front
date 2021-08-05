<?php

namespace App\Http\Controllers;

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

        return view('mypage', ['recent_review_movies' => $recent_review_movies, 'tickets' => $review]);
    }
}
