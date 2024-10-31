<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'transport__bus'; // Si votre table s'appelle 'TRANSPORT__bus', remplacez par 'TRANSPORT__bus'
    protected $primaryKey = 'Id_Bus';

    protected $guarded = [];

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
        return $this->hasMany(BilletBus::class, 'Id_Bus', 'Id_Bus');
    }

    public function avis()
    {
        return $this->hasMany(AvisBus::class, 'Id_Bus', 'Id_Bus');
    }
}
