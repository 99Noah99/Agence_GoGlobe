<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $table = 'chambre__chambre';
    protected $primaryKey = 'Id_Chambre';

    protected $guarded = [];
}
