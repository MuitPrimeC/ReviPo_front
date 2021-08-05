<?php

namespace App\Models;

use App\Models\History;
use App\Models\Review;
use App\Models\Traits\WhereLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory, WhereLike;
    protected $table = 'movie';
    protected $primaryKey = 'movie_id';

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

}
