<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePayement extends Model
{
    protected $table = 'type__type_payement';
    protected $primaryKey = 'Id_Type_Payement';

    protected $guarded = [];
}
