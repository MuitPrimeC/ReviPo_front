<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\History;

class GetUserController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return History::all();
    }
}
