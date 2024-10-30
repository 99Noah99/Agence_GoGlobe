<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'payement__facture';
    protected $primaryKey = 'Id_Facture';
    public $timestamps = false;

    protected $fillable = [
        'Intitule',
        'Montant',
        'Date_creation',
        'Id_Statut_Facture',
    ];

    public function statutFacture()
    {
        return $this->belongsTo(StatutFacture::class, 'Id_Statut_Facture', 'Id_Statut_Facture');
    }
}
