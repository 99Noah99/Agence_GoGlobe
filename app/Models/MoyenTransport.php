<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoyenTransport extends Model
{
    protected $table = 'transport__moyen_transport';
    protected $primaryKey = 'Id_Moyen_Transport';

    protected $guarded = [];
}
