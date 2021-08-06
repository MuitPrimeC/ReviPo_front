<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $primaryKey = 'history_id';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class,'movie_id');
    }
}
