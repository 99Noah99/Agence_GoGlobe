<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BilletAvion extends Model
{
    protected $table = 'billet__billet_avion';
    protected $primaryKey = 'Id_Billet_Avion';

    protected $guarded = [];
}
