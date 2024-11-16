<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BilletAvion extends Model
{
    protected $table = 'billet__billet_avion';
    protected $primaryKey = 'Id_Billet_Avion';

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }

    public function avion()
    {
        return $this->belongsTo(Avion::class, 'Id_Avion', 'Id_Avion');
    }

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }
}
