<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Train extends Model
{
    use HasFactory;
    protected $table = 'transport__train';
    protected $primaryKey = 'Id_Train';

    protected $guarded = [];

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Depart', 'Id_Ville');
    }

    public function villeArrivee()
    {
        return $this->belongsTo(Ville::class, 'Id_Ville_Arriver', 'Id_Ville');
    }
}
