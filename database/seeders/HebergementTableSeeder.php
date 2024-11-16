<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HebergementTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('hebergement')->delete();

        DB::table('hebergement')->insert(array(
            0 =>
            array(
                'Id_Hebergement' => 1,
                'Nom' => 'Hotel des cocotiers',
                'Description' => 'testestestest',
                'Image' => 'wQrFtjasBRGNdkaQNSDGhmv1RmZEr2nwpYoJMTWl.png',
                'Id_Ville' => 41,
                'Id_Type_Hebergement' => 3,
                'created_at' => '2024-11-07 21:43:16',
                'updated_at' => '2024-11-07 21:43:16',
            ),
            1 =>
            array(
                'Id_Hebergement' => 2,
                'Nom' => 'hotel test',
                'Description' => 'testesttesttest',
                'Image' => 'cgYdoidRAJZjwiHEMLMeNLegwjgp1XMU9j5M3wi3.jpg',
                'Id_Ville' => 170,
                'Id_Type_Hebergement' => 7,
                'created_at' => '2024-11-07 21:43:42',
                'updated_at' => '2024-11-07 21:43:42',
            ),
        ));
    }
}
