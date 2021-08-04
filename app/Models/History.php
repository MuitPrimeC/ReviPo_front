<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\User;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $primaryKey = 'history_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
