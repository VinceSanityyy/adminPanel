<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $fillable = [
        'title', 'subtitle', 'body', 'image',
    ];


    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
