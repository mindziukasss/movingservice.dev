<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSEmployees extends MSBaseModel
{
    protected $table = 'ms_employees';

    protected $fillable = ['id','name', 'phone_nr', 'position', 'age', 'pay', 'comment'];
}
