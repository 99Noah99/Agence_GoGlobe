<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReserverForfait extends Model
{
    protected $table = 'reservation__reserver_forfait';
    protected $primaryKey = 'Id_Reservation_Forfait';

    protected $guarded = [];

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }

    public function forfait()
    {
        return $this->hasOne(Forfait::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function hebergement()
    {
        return $this->hasOne(Hebergement::class, 'Id_Hebergement', 'Id_Hebergement');
    }

    public function moyen_transport()
    {
        return $this->hasOne(MoyenTransport::class, 'Id_Moyen_Transport', 'Id_Moyen_Transport');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }
}
