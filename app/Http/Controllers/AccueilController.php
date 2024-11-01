<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSiegeAvion;
use App\Models\TypeSiegeTrain;

class AccueilController extends Controller
{
    public function show_accueil()
    {
        $donnee_vols = TypeSiegeAvion::pluck('Categorie');
        $donnee_train = TypeSiegeTrain::pluck('Categorie');
        return view('accueil', ['donnee_vols' => $donnee_vols], ['donnee_train' => $donnee_train]);
    }
}
