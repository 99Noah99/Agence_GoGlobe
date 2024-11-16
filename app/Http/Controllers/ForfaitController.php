<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForfaitController extends Controller
{
    public function show_all_forfait(Request $request)
    {
        $query = Forfait::query();
        if (isset($request->ville) && isset($request->duree)) {
            $donnee_forfait = $query->whereHas('ville', function ($q) {
                $q->where('Nom', request()->ville);
            })->where('Duree', request()->duree)->get();
        }

        if (Auth::user()->client->categorie_client_forfait->Id_Categorie_Client_Forfait == 1) {
            $donnee_forfait = $query->all();
        } else {
            $donnee_forfait = $query->where('Id_Categorie_Client_Forfait', Auth::user()->client->categorie_client_forfait->Id_Categorie_Client_Forfait)->get();
        }
        return view('forfait', ['donnee_forfait' => $donnee_forfait]);
    }
}
