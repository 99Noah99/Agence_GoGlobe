<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $primaryKey = 'Id_Client';

    protected $guarded = [];

    public function billet_bus()
    {
        return $this->hasMany(BilletBus::class, 'Id_Client', 'Id_Client');
    }

    public function billet_train()
    {
        return $this->hasMany(BilletTrain::class, 'Id_Client', 'Id_Client');
    }

    public function billet_avion()
    {
        return $this->hasMany(BilletAvion::class, 'Id_Client', 'Id_Client');
    }

    public function reserver_voiture()
    {
        return $this->hasMany(ReserverVoiture::class, 'Id_Client', 'Id_Client');
    }

    public function categorie_client_forfait()
    {
        return $this->belongsTo(CategorieClientForfait::class, 'Id_Categorie_Client_Forfait', 'Id_Categorie_Client_Forfait');
    }

    public function reserver_forfait()
    {
        return $this->hasMany(ReserverForfait::class, 'Id_Client', 'Id_Client');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User', 'Id_User');
    }

    public function avis_forfait()
    {
        return $this->hasMany(AvisForfait::class, 'Id_Client', 'Id_Client');
    }

    public function avis_hebergement()
    {
        return $this->hasMany(AvisHebergement::class, 'Id_Client', 'Id_Client');
    }

    public function reserver_chambre()
    {
        return $this->hasMany(ReserverChambre::class, 'Id_Client', 'Id_Client');
    }
}
