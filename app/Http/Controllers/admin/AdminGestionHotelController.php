<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminGestionHotelController extends Controller
{
    public function show_admin_add_hotel()
    {
        return view('admin.admin_add_hotel');
    }
}
