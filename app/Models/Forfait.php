<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    protected $table = 'forfait';
    protected $primaryKey = 'Id_Forfait';

    protected $guarded = [];

    public function deplacer_moyens_transport()
    {
        return $this->hasMany(DeplacerMoyenTransport::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function categorie_client_forfait()
    {
        return $this->belongsTo(CategorieClientForfait::class, 'Id_Categorie_Client_Forfait', 'Id_Categorie_Client_Forfait');
    }

    public function etape_itineraires()
    {
        return $this->hasMany(EtapeItineraire::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function type_forfait()
    {
        return $this->belongsTo(TypeForfaitVoyage::class, 'Id_Type_Forfait_Voyage', 'Id_Type_Forfait_Voyage');
    }

    public function hebergement_forfait()
    {
        return $this->hasMany(HebergementForfait::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function avis_forfait()
    {
        return $this->hasMany(AvisForfait::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function personnel()
    {
        return $this->belongsTo(Personnel::class, 'Id_Personnel', 'Id_Personnel');
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville', 'Id_Ville');
    }
}
