<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvisAvion extends Model
{
    protected $table = 'AVIS__avis_avion';
    protected $primaryKey = 'Id_Avis_Avion';
    public $timestamps = false;

    protected $fillable = [
        'Note',
        'Commentaire',
        'Date_avis',
        'Id_Avion',
        'Id_Client',
    ];

    public function avion()
    {
        return $this->belongsTo(Avion::class, 'Id_Avion', 'Id_Avion');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }
}
