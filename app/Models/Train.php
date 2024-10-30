<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Train extends Model
{
    use HasFactory;
    protected $table = 'transport__train';
    protected $primaryKey = 'Id_Train';
    public $timestamps = false;

    protected $fillable = [
        'Heure_depart',
        'Heure_arriver',
        'Date_depart',
        'Date_arriver',
        'Id_Ville_Depart',
        'Id_Ville_Arriver',
    ];

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Depart', 'Id_Ville');
    }

    public function villeArrivee()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Arriver', 'Id_Ville');
    }
}
