<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipementChambre extends Model
{
    protected $table = 'chambre__equipement_chambre';
    protected $primaryKey = 'Id_Equipement_Chambre';

    protected $guarded = [];
}
