<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LocalisationController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\admin\AdminGestionHebergementController;
use App\Http\Controllers\admin\AdminGestionForfaitController;
use App\Http\Controllers\admin\AdminGestionUserController;


Route::get('/', [AccueilController::class, 'show_accueil'])->name('show_accueil');
Route::get('/accueil', [AccueilController::class, 'show_accueil'])->name('show_accueil');


Route::get('/login', [ConnexionController::class, 'show_login'])->name('show_login');
Route::get('/register', [ConnexionController::class, 'show_register'])->name('show_register');
Route::post('/login', [ConnexionController::class, 'login'])->name('login');
Route::post('/create_account', [ConnexionController::class, 'create_account'])->name('create_account');


// --------------------------     Route prothégée par le middleware auth
Route::middleware('auth')->group(function () {
    Route::post('/logout', [ConnexionController::class, 'logout'])->name('logout');

    // Route recherche pays, region, ville
    Route::get('/recherche/pays', [LocalisationController::class, 'recherche_pays'])->name('recherche_pays');
    Route::get('/recherche/region/{Id_Pays}', [LocalisationController::class, 'recherche_region'])->name('recherche_region');
    Route::get('/recherche/ville/{Id_Region}', [LocalisationController::class, 'recherche_ville'])->name('recherche_ville');


    // Route Account
    Route::get('/account', [AccountController::class, 'show_account'])->name('show_account');
    Route::get('/profil', [AccountController::class, 'show_profil'])->name('show_profil');


    // Route forfait
    Route::get('/forfaits', [ForfaitController::class, 'show_forfait'])->name('show_forfait');
    Route::get('/forfait/detail/{Id_Forfait}', [ForfaitController::class, 'show_forfait_detail'])->name('show_forfait_detail');
    Route::get('/forfait/reservation/{Id_Forfait}', [ForfaitController::class, 'show_forfait_reservation'])->name('show_forfait_reservation');
    Route::post('/forfait/reservation', [ForfaitController::class, 'create_forfait_reservation'])->name('create_forfait_reservation');
    Route::get('/forfait/reservation/{Id_Reservation}/payement', [ForfaitController::class, 'show_forfait_reservation_payement'])->name('show_forfait_reservation_payement');
    Route::post('/forfait/reservation/payement', [ForfaitController::class, 'create_forfait_reservation_payement'])->name('create_forfait_reservation_payement');
    Route::get('/forfait/reservation/facture/telecharger/{Id_Facture}', [ForfaitController::class, 'telecharger_facture'])->name('telecharger_facture');

    // --------------------------     Route pour admin
    Route::middleware('CheckRole:admin')->group(function () {

        Route::get('/admin/accueil', function () {
            return view('admin.admin_accueil');
        })->name('show_admin_accueil');

        Route::get('/admin/gestion/forfait/add', [AdminGestionForfaitController::class, 'show_admin_add_forfait'])->name('show_admin_add_forfait');
        Route::post('/admin/gestion/forfait/add', [AdminGestionForfaitController::class, 'create_forfait'])->name('create_forfait');
        Route::get('/admin/gestion/hebergement/add', [AdminGestionHebergementController::class, 'show_admin_add_hebergement'])->name('show_admin_add_hebergement');
        Route::post('/admin/gestion/hebergement/add', [AdminGestionHebergementController::class, 'create_hebergement'])->name('create_hebergement');
        Route::get('/admin/gestion/user', [AdminGestionUserController::class, 'show_admin_all_user'])->name('show_admin_all_user');
        Route::get('/admin/gestion/user/delete/{id}', [AdminGestionUserController::class, 'admin_delete_user'])->name('admin_delete_user');
        Route::get('/admin/gestion/user/update/{id}', [AdminGestionUserController::class, 'show_admin_update_user'])->name('show_admin_update_user');
        Route::post('/admin/gestion/user/update', [AdminGestionUserController::class, 'admin_update_user'])->name('admin_update_user');

        // Route pour les requêtes AJAX
        Route::get('/admin/gestion/forfait/get_hebergement', [AdminGestionForfaitController::class, 'get_hebergement'])->name('get_hebergement');
        Route::get('/admin/gestion/forfait/get_moyen_transport', [AdminGestionForfaitController::class, 'get_moyen_transport'])->name('get_moyen_transport');
    });
});
