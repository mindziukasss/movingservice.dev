<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSAgendas extends MSBaseModel
{
    protected $table = 'ms_agendas';

    protected $fillable = ['id', 'working_hours', 'pay_hour', 'hard_pay', 'comment'];
}
