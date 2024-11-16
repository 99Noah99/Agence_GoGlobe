<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayementFactureTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('payement__facture')->delete();

        DB::table('payement__facture')->insert(array(
            0 =>
            array(
                'Id_Facture' => 1,
                'Intitule' => 'facture 1',
                'Montant' => '100.00',
                'Date_creation' => '2024-11-16',
                'Id_Statut_Facture' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'Id_Facture' => 2,
                'Intitule' => 'facture 2',
                'Montant' => '20.00',
                'Date_creation' => '2024-11-16',
                'Id_Statut_Facture' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'Id_Facture' => 3,
                'Intitule' => 'facture 3',
                'Montant' => '40.00',
                'Date_creation' => '2024-11-16',
                'Id_Statut_Facture' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'Id_Facture' => 4,
                'Intitule' => 'facture 4',
                'Montant' => '70.00',
                'Date_creation' => '2024-11-16',
                'Id_Statut_Facture' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'Id_Facture' => 5,
                'Intitule' => 'facture 5',
                'Montant' => '180.00',
                'Date_creation' => '2024-11-16',
                'Id_Statut_Facture' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
