<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'localisation__region';
    protected $primaryKey = 'Id_Region';

    protected $guarded = [];
}
