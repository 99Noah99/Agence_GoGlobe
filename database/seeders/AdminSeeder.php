<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Exception;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'Nom' => 'Admin',
                'Prenom' => 'Admin',
                'Email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'Role' => 'admin',
            ]);

            Personnel::create([
                'Id_User' => $user->Id_User,
            ]);

            DB::commit(); // Commit la transaction si tout se passe bien
        } catch (Exception $e) {
            DB::rollBack(); // Rollback la transaction en cas d'erreur
            throw $e; // Relance l'exception pour la gestion des erreurs
        }
    }
}
