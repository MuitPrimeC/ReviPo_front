<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommended extends Model
{

    use HasFactory;
    protected $table = 'recommended';
    protected $primaryKey = 'recommended_id';
    protected $guarded = [
        'recommended_id',
    ];
}
