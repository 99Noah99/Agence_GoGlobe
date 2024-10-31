<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReserverForfait extends Model
{
    protected $table = 'reservation__reserver_forfait';
    protected $primaryKey = 'Id_Reservation_Forfait';

    protected $guarded = [];
}
