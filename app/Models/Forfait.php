<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $table = 'forfait';
    protected $primaryKey = 'Id_Forfait';

    protected $guarded = [];

    public function deplacerMoyensTransport()
    {
        return $this->hasMany(DeplacerMoyenTransport::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function hebergementForfait()
    {
        return $this->hasMany(HebergementForfait::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function etapeItineraires()
    {
        return $this->hasMany(EtapeItineraire::class, 'Id_Forfait', 'Id_Forfait');
    }
}
