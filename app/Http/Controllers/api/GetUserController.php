<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\User;

class GetUserController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        $r = [];
        foreach (User::all() as $user) {
            $movie_ids = [];
            foreach (History::where('user_id', $user['user_id'])->get() as $history) {
                if (array_key_exists($history->movie_id, $movie_ids)) {
                    continue;
                }
                array_push($movie_ids, $history->movie_id);
            }
            array_push($r, ['user_id' => $user['user_id'], 'history' => $movie_ids]);
        }
        return $r;
    }
}
