<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    protected $table = 'payement__payement';
    protected $primaryKey = 'Id_Payement';

    protected $guarded = [];
}
