<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $exchange = Exchange::find($request->exchange_id);
        if ($exchange->points > Auth::user()->points) {
            return view("message", ['value' => 2]);
        }

        function random($length)
        {
            return array_reduce(range(1, $length), function ($p) {
                return $p . str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz')[0];
            });
        }

        DB::transaction(function () use ($request, $exchange) {
            $user = User::where(['user_id' => Auth::user()->user_id])->update([
                'points' => Auth::user()->points - $exchange->points,
            ]);
            Ticket::insert([
                'user_id' => Auth::id(),
                'item_name' => random(6),
                'is_use' => 0,
            ]);
            return 1;
        });
        return view("message", ['value' => 1]);
    }

}
