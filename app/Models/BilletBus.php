<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BilletBus extends Model
{
    use HasFactory;

    protected $table = 'billet__billet_bus';
    protected $primaryKey = 'Id_Billet_Bus';

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Id_Client', 'Id_Client');
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'Id_Bus', 'Id_Bus');
    }

    public function facture()
    {
        return $this->hasOne(Facture::class, 'Id_Facture', 'Id_Facture');
    }
}
