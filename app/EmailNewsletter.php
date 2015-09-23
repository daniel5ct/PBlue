<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailNewsletter extends Model
{
    protected $fillable = [
        'id_newsletter',
        'email'
    ];

    protected $table = 'email_newsletter';

}