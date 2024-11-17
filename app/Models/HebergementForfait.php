<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HebergementForfait extends Model
{
    protected $table = 'hebergement_forfait';
    protected $primaryKey = 'Id_Avoir_Hebergement';

    protected $guarded = [];

    public function hebergement()
    {
        return $this->belongsTo(Hebergement::class, 'Id_Hebergement', 'Id_Hebergement');
    }
}
