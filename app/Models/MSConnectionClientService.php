<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MSConnectionClientService extends Model
{
    protected $table = 'ms_connection_client_service';

    protected $fillable = ['client_id', 'service_id'];
}
