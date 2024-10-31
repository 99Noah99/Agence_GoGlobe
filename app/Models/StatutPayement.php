<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatutPayement extends Model
{
    protected $table = 'payement__statut_payement';
    protected $primaryKey = 'Id_Statut_Payement';

    protected $guarded = [];
}
