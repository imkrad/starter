<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Ra-ouf',
                'lastname' => 'Jumli',
                'middlename' => 'Indanan',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09171531652',
                'avatar' => 'avatar.jpg',
                'user_id' => 1,
                'created_at' => '2024-07-30 08:19:03',
                'updated_at' => '2024-07-30 10:23:34',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Joefry',
                'lastname' => 'Fernando',
                'middlename' => 'P',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09153907133',
                'avatar' => 'avatar',
                'user_id' => 2,
                'created_at' => '2024-07-30 11:04:54',
                'updated_at' => '2024-07-30 11:04:54',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'Jali',
                'lastname' => 'Badiola',
                'middlename' => 'J',
                'suffix' => NULL,
                'gender' => 'Female',
                'mobile' => '09123456789',
                'avatar' => 'avatar',
                'user_id' => 3,
                'created_at' => '2024-08-03 14:46:56',
                'updated_at' => '2024-08-03 14:46:56',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'Ingrid',
                'lastname' => 'Abella',
                'middlename' => 'T',
                'suffix' => NULL,
                'gender' => 'Female',
                'mobile' => '09123654789',
                'avatar' => 'avatar',
                'user_id' => 4,
                'created_at' => '2024-08-03 14:47:33',
                'updated_at' => '2024-08-03 14:47:33',
            ),
        ));

        
    }
}