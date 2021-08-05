
<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewScoreController extends Controller
{
    /**
     * name store
     * desc
     *
     * @queryParam title string Example: イベントタイトル
     */
    public function store(Request $request)
    {
        $valid_dict = [
            'review_id' => ['numeric','required', 'exists:review,review_id'],
        ];

        $request->validate($valid_dict);
        // $data = $request->only(array_keys($valid_dict));
        $r = Review::where('review_id', $request->review_id);
        $d = $r->first();
        $r->update(['review_score' => $d->review_score + 1]);
        return _redirect("/movie/{$r->movie_id}");
    }

}
