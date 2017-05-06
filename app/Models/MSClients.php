<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSClients extends MSBaseModel
{
    protected $table = 'ms_clients';

    protected $fillable = ['id', 'name', 'phone_number', 'address', 'type', 'sum', 'comment'];
}
