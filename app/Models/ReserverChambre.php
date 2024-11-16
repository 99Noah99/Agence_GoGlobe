<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReserverChambre extends Model
{
    protected $table = 'reservation__reserver_chambre';
    protected $primaryKey = 'Id_Reservation_Chambre';

    protected $guarded = [];

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }
}
