<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReserverVoiture extends Model
{
    protected $table = 'reservation__reserver_voiture';
    protected $primaryKey = 'Id_Reservation_Voiture';

    protected $guarded = [];

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }
}
