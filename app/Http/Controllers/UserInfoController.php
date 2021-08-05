<?php

namespace App\Http\Controllers;

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
        return view('mypage', ['recent_review_movies' => $recent_review_movies]);
    }
}
