<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSCopmany extends MSBaseModel
{
    protected $table = 'ms_company';

    protected $fillable = ['id','name', 'employees_id', 'client_id', 'comment'];
}
