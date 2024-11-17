<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    protected $table = 'payement__payement';
    protected $primaryKey = 'Id_Payement';

    protected $guarded = [];

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'Id_Facture', 'Id_Facture');
    }

    public function type_payement()
    {
        return $this->belongsTo(TypePayement::class, 'Id_Type_Payement', 'Id_Type_Payement');
    }

    public function statut_payement()
    {
        return $this->belongsTo(StatutPayement::class, 'Id_Statut_Payement', 'Id_Statut_Payement');
    }
}
