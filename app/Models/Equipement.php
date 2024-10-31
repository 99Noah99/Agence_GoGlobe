<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $table = 'chambre__equipement';
    protected $primaryKey = 'Id_Equipement';

    protected $guarded = [];
}
