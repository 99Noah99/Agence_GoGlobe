<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvisVoiture extends Model
{
    protected $table = 'avis__avis_voiture';
    protected $primaryKey = 'Id_Avis_Voiture';

    protected $guarded = [];
}
