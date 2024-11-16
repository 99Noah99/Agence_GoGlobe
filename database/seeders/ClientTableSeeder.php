<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('client')->delete();

        DB::table('client')->insert(array(
            0 =>
            array(
                'Id_Client' => 1,
                'Date_creation_compte' => '2024-11-15',
                'Moyen_transport_pref' => NULL,
                'Type_herbergement_pref' => NULL,
                'Id_Categorie_Client_Forfait' => 2,
                'Id_User' => 2,
                'created_at' => '2024-11-15 23:07:52',
                'updated_at' => '2024-11-15 23:07:52',
            ),
            1 =>
            array(
                'Id_Client' => 2,
                'Date_creation_compte' => '2024-11-15',
                'Moyen_transport_pref' => NULL,
                'Type_herbergement_pref' => NULL,
                'Id_Categorie_Client_Forfait' => 2,
                'Id_User' => 3,
                'created_at' => '2024-11-15 23:08:20',
                'updated_at' => '2024-11-15 23:08:20',
            ),
        ));
    }
}
