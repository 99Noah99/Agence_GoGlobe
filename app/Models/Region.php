<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Region extends Model
{
    use HasFactory;

    protected $table = 'localisation__region';
    protected $primaryKey = 'Id_Region';

    protected $guarded = [];

    public function pays()
    {
        return $this->belongsTo(Pays::class, 'Id_Pays', 'Id_Pays');
    }

    public function villes()
    {
        return $this->hasMany(Ville::class, 'Id_Region', 'Id_Region');
    }
}
