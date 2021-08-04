<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return view('signin');
    }
    /**
     * name store
     * desc
     *
     * @queryParam title string Example: イベントタイトル
     */
    public function store(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        if (Auth::attempt($credentials, $remember = true)) {
            $token = $request->user()->createToken('read/write');
            if ($request->has('json')) {
                return ['token' => $token->plainTextToken];
            } else {
                return _redirect('/home');
            }
        } else if ($request->has('json')) {
            return $credentials;
        } else {
            return view('signin', ['errorMessage' => 'メールアドレスまたはパスワードに誤りがあります。']);
        }
    }

}
