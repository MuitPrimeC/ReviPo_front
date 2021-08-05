<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointExchangeController extends Controller
{
    /**
     * name
     * desc
     */
    public function index()
    {
        return view('point_exchange');
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
            'exchange_id' => ['numeric', 'required', 'exists:exchange,exchange_id'],
        ];
        $request->validate($valid_dict);
        $data = $request->only(array_keys($valid_dict));

        $value = 1;
        //return response(['code' => 'ok']);
        return view("message",['value' => $value]);
    }

}
