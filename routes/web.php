<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AccueilController;

Route::get('/', [AccueilController::class, 'show_accueil'])->name('show_accueil');
Route::get('/accueil', [AccueilController::class, 'show_accueil'])->name('show_accueil');


Route::get('/login', [ConnexionController::class, 'show_login'])->name('show_login');
Route::get('/register', [ConnexionController::class, 'show_register'])->name('show_register');
Route::post('/login', [ConnexionController::class, 'login'])->name('login');
Route::post('/create_account', [ConnexionController::class, 'create_account'])->name('create_account');


// --------------------------     Route prothégée par le middleware auth
Route::middleware('auth')->group(function () {
    Route::post('/logout', [ConnexionController::class, 'logout'])->name('logout');
});
