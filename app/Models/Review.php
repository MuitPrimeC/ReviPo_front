<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\User;
use APP\Models\Movie;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $primaryKey = 'review_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}

