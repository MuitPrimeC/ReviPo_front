<?php

namespace App\Http\Controllers;

use App\Models\User;

class TestController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return response(User::all());
    }
}
