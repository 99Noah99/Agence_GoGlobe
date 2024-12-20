<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BilletTrain extends Model
{
    use HasFactory;
    protected $table = 'billet__billet_train';
    protected $primaryKey = 'Id_Billet_Train';

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }

    public function train()
    {
        return $this->belongsTo(Train::class, 'Id_Train', 'Id_Train');
    }

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }
}
