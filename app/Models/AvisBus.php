<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvisBus extends Model
{
    protected $table = 'AVIS__avis_bus';
    protected $primaryKey = 'Id_Avis_Bus';
    public $timestamps = false;
    protected $fillable = [
        'Commentaire',
        'Date_Avis',
        'Note',
        'Id_Bus',
        'Id_Client',

    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'Id_Bus', 'Id_Bus');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }
}
