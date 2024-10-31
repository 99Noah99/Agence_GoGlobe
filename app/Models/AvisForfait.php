<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvisForfait extends Model
{
    protected $table = 'AVIS__avis_forfait';
    protected $primaryKey = 'Id_Avis_Forfait';
    public $timestamps = false;

    protected $guarded = [];

    public function forfait()
    {
        return $this->belongsTo(Forfait::class, 'Id_Forfait', 'Id_Forfait');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }
}
