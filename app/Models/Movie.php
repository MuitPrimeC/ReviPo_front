<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Review;
use APP\Models\History;

class Movie extends Model
{
    use HasFactory;
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
