<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtapeItineraire extends Model
{
    protected $table = 'etape_itineraire';
    protected $primaryKey = 'Id_Etape_Itineraire';

    protected $guarded = [];

    public function forfait()
    {
        return $this->belongsTo(Forfait::class, 'Id_Forfait', 'Id_Forfait');
    }
}
