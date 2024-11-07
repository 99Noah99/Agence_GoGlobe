<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function show_account()
    {
        $current_user = Auth::user();
        return view('customer.account.dashboard', ['activeSection' => 'dashboard', 'current_user' => $current_user]);
    }

    public function show_profil()
    {
        return view('customer.account.profil', ['activeSection' => 'profile']);
    }
}
