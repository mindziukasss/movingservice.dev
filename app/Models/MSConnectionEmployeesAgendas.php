<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSConnectionEmployeesAgendas extends Model
{
    protected $table = 'ms_connection_employees_agendas';

    protected $fillable = ['employees_id', 'agends_id'];
}
