<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Client;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    public function show_login()
    {
        return view('connexion.login');
    }

    public function show_register()
    {
        return view('connexion.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            Session::regenerate();
            return redirect()->route('show_accueil');
        }

        // Redirection vers 'show_login' en cas d'erreur avec le message d'erreur
        return redirect()->route('show_login')->withErrors([
            'login' => 'Identifiant ou mot de passe incorrect.',
        ])->withInput();
    }

    public function create_account(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required|email',
                'username' => 'required',
                'password' => 'required',
            ]);

            $user = User::create([
                'Nom' => $request->nom,
                'Prenom' => $request->prenom,
                'Email' => $request->email,
                'Numero_tel' => $request->numero_telephone,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'Role' => 'client',
            ]);

            $client = Client::create([
                'Date_creation_compte' => now(),
                'Id_User' => $user->Id_User,
                'Id_Categorie_Client_Forfait' => 2,
            ]);

            DB::commit();

            // Tentative de connexion de l'utilisateur
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                Session::regenerate();
            } else {
                return redirect()->route('show_login');
            }

            return redirect()->route('show_accueil');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('show_register');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('show_accueil');
    }
}
