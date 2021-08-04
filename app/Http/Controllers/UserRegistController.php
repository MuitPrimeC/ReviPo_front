<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'password' => ['required', 'min:4'],
        ];
        $request->validate($valid_dict);
        $data = $request->only(array_keys($valid_dict));
        $data['password'] = Hash::make($request->password);
        User::insert($data);
        $credentials = [$data['username'], [$data['password']]];
        if (Auth::attempt($credentials, $remember = true)) {
            $token = $request->user()->createToken('read/write');
            return _redirect('/home');
        } else {
            return _redirect('/signup');
        }
    }

}
