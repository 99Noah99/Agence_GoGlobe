<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pays extends Model
{
    use HasFactory;

    protected $table = 'localisation__pays';
    protected $primaryKey = 'Id_Pays';

    protected $guarded = [];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
