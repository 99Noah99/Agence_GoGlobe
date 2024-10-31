<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table = 'transport__voiture';
    protected $primaryKey = 'Id_Voiture';

    protected $guarded = [];
}