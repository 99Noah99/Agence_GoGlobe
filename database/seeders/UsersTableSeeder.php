<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            0 => array(
                'Id_User' => 2,
                'Nom' => 'Lelievre',
                'Prenom' => 'Kevin',
                'Email' => 'kevin.lelievre@example.com',
                'Numero_tel' => '0600000001',
                'username' => 'kevin01',
                'password' => Hash::make('password1'), // Kevin's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => array(
                'Id_User' => 3,
                'Nom' => 'Durand',
                'Prenom' => 'Marie',
                'Email' => 'marie.durand@example.com',
                'Numero_tel' => '0600000002',
                'username' => 'marie02',
                'password' => Hash::make('password2'), // Marie's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => array(
                'Id_User' => 4,
                'Nom' => 'Bernard',
                'Prenom' => 'Paul',
                'Email' => 'paul.bernard@example.com',
                'Numero_tel' => '0600000003',
                'username' => 'paul03',
                'password' => Hash::make('password3'), // Paul's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => array(
                'Id_User' => 5,
                'Nom' => 'Petit',
                'Prenom' => 'Julie',
                'Email' => 'julie.petit@example.com',
                'Numero_tel' => '0600000004',
                'username' => 'julie04',
                'password' => Hash::make('password4'), // Julie's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => array(
                'Id_User' => 6,
                'Nom' => 'Martin',
                'Prenom' => 'Luc',
                'Email' => 'luc.martin@example.com',
                'Numero_tel' => '0600000005',
                'username' => 'luc05',
                'password' => Hash::make('password5'), // Luc's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => array(
                'Id_User' => 7,
                'Nom' => 'Robert',
                'Prenom' => 'Emma',
                'Email' => 'emma.robert@example.com',
                'Numero_tel' => '0600000006',
                'username' => 'emma06',
                'password' => Hash::make('password6'), // Emma's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => array(
                'Id_User' => 8,
                'Nom' => 'Richard',
                'Prenom' => 'Nicolas',
                'Email' => 'nicolas.richard@example.com',
                'Numero_tel' => '0600000007',
                'username' => 'nicolas07',
                'password' => Hash::make('password7'), // Nicolas' password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => array(
                'Id_User' => 9,
                'Nom' => 'Michel',
                'Prenom' => 'Camille',
                'Email' => 'camille.michel@example.com',
                'Numero_tel' => '0600000008',
                'username' => 'camille08',
                'password' => Hash::make('password8'), // Camille's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => array(
                'Id_User' => 10,
                'Nom' => 'Garcia',
                'Prenom' => 'Victor',
                'Email' => 'victor.garcia@example.com',
                'Numero_tel' => '0600000009',
                'username' => 'victor09',
                'password' => Hash::make('password9'), // Victor's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => array(
                'Id_User' => 11,
                'Nom' => 'Lopez',
                'Prenom' => 'Sophie',
                'Email' => 'sophie.lopez@example.com',
                'Numero_tel' => '0600000010',
                'username' => 'sophie10',
                'password' => Hash::make('password10'), // Sophie's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => array(
                'Id_User' => 12,
                'Nom' => 'Morel',
                'Prenom' => 'Leo',
                'Email' => 'leo.morel@example.com',
                'Numero_tel' => '0600000011',
                'username' => 'leo11',
                'password' => Hash::make('password11'), // Leo's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => array(
                'Id_User' => 13,
                'Nom' => 'Fournier',
                'Prenom' => 'Alice',
                'Email' => 'alice.fournier@example.com',
                'Numero_tel' => '0600000012',
                'username' => 'alice12',
                'password' => Hash::make('password12'), // Alice's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => array(
                'Id_User' => 14,
                'Nom' => 'Girard',
                'Prenom' => 'Jean',
                'Email' => 'jean.girard@example.com',
                'Numero_tel' => '0600000013',
                'username' => 'jean13',
                'password' => Hash::make('password13'), // Jean's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => array(
                'Id_User' => 15,
                'Nom' => 'Dupont',
                'Prenom' => 'Laura',
                'Email' => 'laura.dupont@example.com',
                'Numero_tel' => '0600000014',
                'username' => 'laura14',
                'password' => Hash::make('password14'), // Laura's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => array(
                'Id_User' => 16,
                'Nom' => 'Lambert',
                'Prenom' => 'Simon',
                'Email' => 'simon.lambert@example.com',
                'Numero_tel' => '0600000015',
                'username' => 'simon15',
                'password' => Hash::make('password15'), // Simon's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => array(
                'Id_User' => 17,
                'Nom' => 'Bonnet',
                'Prenom' => 'Charlotte',
                'Email' => 'charlotte.bonnet@example.com',
                'Numero_tel' => '0600000016',
                'username' => 'charlotte16',
                'password' => Hash::make('password16'), // Charlotte's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => array(
                'Id_User' => 18,
                'Nom' => 'Francois',
                'Prenom' => 'Theo',
                'Email' => 'theo.francois@example.com',
                'Numero_tel' => '0600000017',
                'username' => 'theo17',
                'password' => Hash::make('password17'), // Theo's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => array(
                'Id_User' => 19,
                'Nom' => 'Aubert',
                'Prenom' => 'Clara',
                'Email' => 'clara.aubert@example.com',
                'Numero_tel' => '0600000018',
                'username' => 'clara18',
                'password' => Hash::make('password18'), // Clara's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => array(
                'Id_User' => 20,
                'Nom' => 'Renard',
                'Prenom' => 'Hugo',
                'Email' => 'hugo.renard@example.com',
                'Numero_tel' => '0600000019',
                'username' => 'hugo19',
                'password' => Hash::make('password19'), // Hugo's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => array(
                'Id_User' => 21,
                'Nom' => 'Chevalier',
                'Prenom' => 'Manon',
                'Email' => 'manon.chevalier@example.com',
                'Numero_tel' => '0600000020',
                'username' => 'manon20',
                'password' => Hash::make('password20'), // Manon's password
                'Role' => 'client',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
