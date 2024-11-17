<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
    protected $table = 'hebergement';
    protected $primaryKey = 'Id_Hebergement';

    protected $guarded = [];

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville', 'Id_Ville');
    }

    public function type_hebergement()
    {
        return $this->belongsTo(TypeHebergement::class, 'Id_Type_Hebergement', 'Id_Type_Hebergement');
    }
}
