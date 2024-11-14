<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieClientForfait extends Model
{
    protected $table = 'categorie_client_forfait';
    protected $primaryKey = 'Id_Categorie_Client_Forfait';

    protected $guarded = [];

    public function client()
    {
        return $this->hasMany(Client::class, 'Id_Categorie_Client_Forfait', 'Id_Categorie_Client_Forfait');
    }
}
