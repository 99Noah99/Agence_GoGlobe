<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'localisation__pays';
    protected $primaryKey = 'Id_Pays';

    protected $guarded = [];
}
