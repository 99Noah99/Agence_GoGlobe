<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MoyenTransport;

use Illuminate\Http\Request;

class AdminGestionForfaitController extends Controller
{

    public function show_admin_add_forfait()
    {
        $donnee_moyen_transport = MoyenTransport::pluck('Nom_mode_transport');
        return view('admin.admin_add_forfait', ['donnee_moyen_transport' => $donnee_moyen_transport]);
    }
}
