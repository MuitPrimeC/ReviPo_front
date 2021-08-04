<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Request;

class UserRegistController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return view('signup');
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
            'username' => ['required', 'unique:user,username'],
            'password' => ['required'],
        ];
        $request->validate($valid_dict);
        $data = $request->only(array_keys($valid_dict));
        User::insert($data);
        $credentials = $request->only(['mail', 'password']);
        if (Auth::attempt($credentials, $remember = true)) {
        return _redirect('/signin');
    }

}
