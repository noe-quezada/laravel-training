<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $fillable = [
        'title','number_of_seasons','premiere_date', 'genre',
    ];

    public $table = 'series';
}
