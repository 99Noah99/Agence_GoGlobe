<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\admin\AdminGestionHotelController;

Route::get('/', [AccueilController::class, 'show_accueil'])->name('show_accueil');
Route::get('/accueil', [AccueilController::class, 'show_accueil'])->name('show_accueil');


Route::get('/login', [ConnexionController::class, 'show_login'])->name('show_login');
Route::get('/register', [ConnexionController::class, 'show_register'])->name('show_register');
Route::post('/login', [ConnexionController::class, 'login'])->name('login');
Route::post('/create_account', [ConnexionController::class, 'create_account'])->name('create_account');


// --------------------------     Route prothégée par le middleware auth
Route::middleware('auth')->group(function () {
    Route::post('/logout', [ConnexionController::class, 'logout'])->name('logout');

    // Route Account
    Route::get('/account', [AccountController::class, 'show_account'])->name('show_account');
    Route::get('/profil', [AccountController::class, 'show_profil'])->name('show_profil');

    // --------------------------     Route pour admin
    Route::middleware('CheckRole:admin')->group(function () {

        Route::get('/admin/accueil', function () {
            return view('admin.admin_accueil');
        })->name('show_admin_accueil');
        Route::get('/admin/gestion_hotel/add', [AdminGestionHotelController::class, 'show_admin_add_hotel'])->name('show_admin_add_hotel');
    });
});
