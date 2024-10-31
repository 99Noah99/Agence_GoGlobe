<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatutFacture extends Model
{
    use HasFactory;
    protected $table = 'payement__statut_facture';
    protected $primaryKey = 'Id_Statut_Facture';

    protected $guarded = [];

    public function factures()
    {
        return $this->hasMany(Facture::class, 'Id_Statut_Facture', 'Id_Statut_Facture');
    }
}
