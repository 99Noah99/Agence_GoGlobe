<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeplacerMoyenTransport extends Model
{
    protected $table = 'transport__deplacer_moyen_transport';
    protected $primaryKey = 'Id_Deplacer_Moyen_Transport';

    protected $guarded = [];

    public function moyenTransport()
    {
        return $this->hasOne(MoyenTransport::class, 'Id_Moyen_Transport', 'Id_Moyen_Transport ');
    }
}
