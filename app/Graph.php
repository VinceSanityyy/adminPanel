<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Cache;
use Charts;


class Graph extends Model
{
    //

    protected $connection = 'mysql2';
    protected $table = 'ico_stages';

    protected $fillable = [
        'name', 'start_date', 'end_date', 'total_tokens', 'base_price', 'min_purchase', 'max_purchase', 'soft_cap', 'hard_cap',
        'display_mode','private','user_panel_display','sales_token','sales_amount','status',
    ];


}

