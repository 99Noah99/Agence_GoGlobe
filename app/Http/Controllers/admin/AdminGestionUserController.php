<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Exception;

class AdminGestionUserController extends Controller
{
    public function show_admin_all_user()
    {
        $donnee_client = Client::select('Id_Client', 'created_at', 'Id_Categorie_Client_Forfait', 'Id_User')->with(['user:Id_User,Nom,Prenom,Email,Numero_tel', 'categorie_client_forfait:Id_Categorie_Client_Forfait,Type'])->get();
        // dd($donnee_client);
        return view('admin.admin_all_user', ['donnee_client' => $donnee_client]);
    }

    public function show_admin_delete_user(Request $request)
    {
        DB::beginTransaction();
        try {
            $client = Client::find($request->id);
            $user = $client->user;
            dd($user);
            // $client->delete();
            // DB::commit();
            return redirect()->route('show_admin_all_user');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('show_admin_all_user')->with('error', 'Erreur lors de la suppression');
        }
    }
}
