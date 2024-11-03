<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TypeHebergement;
use Illuminate\Http\Request;

class AdminGestionHotelController extends Controller
{
    public function show_admin_add_hotel()
    {
        $donnee_type_hebergement = TypeHebergement::pluck('Intitule');
        return view('admin.admin_add_hotel', ['donnee_type_hebergement' => $donnee_type_hebergement]);
    }
}
