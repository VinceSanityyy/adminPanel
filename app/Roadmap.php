<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    //
    protected $fillable = [
        'year', 'body',
    ];
}
