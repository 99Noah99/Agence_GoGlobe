<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    protected $table = 'transport__avion';
    protected $primaryKey = 'Id_Avion';

    protected $guarded = []; // aucune colonne protégée, permet la création 

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Depart', 'Id_Ville');
    }

    public function villeArriver()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Arriver', 'Id_Ville');
    }

    public function billets()
    {
        return $this->hasMany(BilletAvion::class, 'Id_Avion', 'Id_Avion');
    }

    public function avis()
    {
        return $this->hasMany(AvisAvion::class, 'Id_Avion', 'Id_Avion');
    }
}
