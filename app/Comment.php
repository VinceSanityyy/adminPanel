<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'name', 'email', 'comment',
    ];
    //
    public function news(){
        return $this->belongsTo('App\News');
    }
}
