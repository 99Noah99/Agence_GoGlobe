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
}
