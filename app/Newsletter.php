<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'title',
        'introduction',
        'body',
        'published_at'
    ];

    protected $table = 'newsletter';
}
