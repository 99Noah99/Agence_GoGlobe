<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;
    protected $table = 'localisation__ville';
    protected $primaryKey = 'Id_Ville';
    public $timestamps = false;

    protected $fillable = [
        'Nom',
        // Autres colonnes...
    ];

    public function trainsDepart()
    {
        return $this->hasMany(Train::class, 'Id_Ville_Depart', 'Id_Ville');
    }

    public function trainsArrivee()
    {
        return $this->hasMany(Train::class, 'Id_Ville_Arriver', 'Id_Ville');
    }
}
