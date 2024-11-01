<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show_account()
    {
        return view('customer.account.dashboard', ['activeSection' => 'dashboard']);
    }

    public function show_profil()
    {
        return view('customer.account.profil', ['activeSection' => 'profile']);
    }
}
