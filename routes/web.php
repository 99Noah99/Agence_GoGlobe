<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/login', [ConnexionController::class, 'show_login'])->name('login');
Route::get('/register', [ConnexionController::class, 'show_register'])->name('register');
