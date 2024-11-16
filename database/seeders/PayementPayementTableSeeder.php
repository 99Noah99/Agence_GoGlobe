<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayementPayementTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('payement__payement')->delete();

        DB::table('payement__payement')->insert(array(
            0 =>
            array(
                'Id_Payement' => 1,
                'Date_creation' => '2024-11-16',
                'Prix' => '10.00',
                'Id_Type_Payement' => 1,
                'Id_Statut_Payement' => 1,
                'Id_Facture' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'Id_Payement' => 2,
                'Date_creation' => '2024-11-16',
                'Prix' => '10.00',
                'Id_Type_Payement' => 3,
                'Id_Statut_Payement' => 2,
                'Id_Facture' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'Id_Payement' => 3,
                'Date_creation' => '2024-11-16',
                'Prix' => '10.00',
                'Id_Type_Payement' => 2,
                'Id_Statut_Payement' => 3,
                'Id_Facture' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
