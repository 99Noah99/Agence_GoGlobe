<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'payement__facture';
    protected $primaryKey = 'Id_Facture';

    protected $guarded = [];

    public function statut_facture()
    {
        return $this->belongsTo(StatutFacture::class, 'Id_Statut_Facture', 'Id_Statut_Facture');
    }

    public function payements()
    {
        return $this->hasMany(Payement::class, 'Id_Facture', 'Id_Facture');
    }

    public function reservation_forfait()
    {
        return $this->hasOne(ReserverForfait::class, 'Id_Facture', 'Id_Facture');
    }
}
