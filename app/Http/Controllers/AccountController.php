<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function show_account()
    {
        $current_user = Auth::user();
        $reservation_forfait = $current_user->client->reserver_forfait;
        return view('customer.account.dashboard', ['activeSection' => 'dashboard', 'current_user' => $current_user, 'reservation_forfait' => $reservation_forfait]);
    }

    public function show_profil()
    {
        $current_user = Auth::user();
        return view('customer.account.profil', ['activeSection' => 'profile', 'current_user' => $current_user]);
    }
}
