<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;

    protected $table = 'personnel';
    protected $primaryKey = 'Id_Personnel';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'Id_User', 'Id_User');
    }
}
