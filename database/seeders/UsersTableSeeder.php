<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'administrator',
                'email' => 'kradjumli@gmail.com',
                'password' => '$2y$12$l0.86vFUv..DnHE/Q05utuRW8En10gIik4Ao86foce/tJ2BRYMN6y',
                'role' => 'Administrator',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-07-30 08:19:03',
                'updated_at' => '2024-07-30 08:19:03',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'jpf',
                'email' => 'joefryfernando@gmail.com',
                'password' => '$2y$12$7Kb98EW15mOscac6S15HjejBzYvQ2wTghNfxVCWWesLb21kIXQni.',
                'role' => 'Staff',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-07-30 11:04:54',
                'updated_at' => '2024-07-30 11:04:57',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'jjb',
                'email' => 'jali_badiola2005@yahoo.com',
                'password' => '$2y$12$Zd9SOkLOtdiqJ0BBUMgdjewjoGVwyvZIDqH/NLPfDSfp/Q5pX5gT6',
                'role' => 'Staff',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-08-03 14:46:56',
                'updated_at' => '2024-08-03 14:46:58',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'ita',
                'email' => 'ita@gmail.com',
                'password' => '$2y$12$jPEwKz8AyA/xGvtK8Us0KOSanNyytI5urYvSf2U1Eet5piGc0tTBi',
                'role' => 'Staff',
                'is_active' => 1,
                'is_new' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'email_verified_at' => '2024-05-15 08:46:33',
                'password_changed_at' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2024-08-03 14:47:33',
                'updated_at' => '2024-08-03 14:47:35',
            ),
        ));

        
    }
}