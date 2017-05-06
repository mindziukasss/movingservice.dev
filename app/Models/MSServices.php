<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSServices extends MSBaseModel
{
    protected $table = 'ms_sevices';

    protected $fillable = ['id', 'name', 'duration', 'price', 'hard_price'];
}
