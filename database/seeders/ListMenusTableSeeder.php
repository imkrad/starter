<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListMenusTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_menus')->truncate();
        
        \DB::table('list_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dashboard',
                'icon' => 'ri-apps-line',
                'route' => '/executive',
                'path' => 'Administrator/Dashboard',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 1,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User Management',
                'icon' => 'ri-team-fill ',
                'route' => '/executive/users',
                'path' => 'Administrator/Users',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 2,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Role Management',
                'icon' => 'ri-shield-check-line',
                'route' => '/executive/roles',
                'path' => 'Administrator/Roles',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 3,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Menu Management',
                'icon' => 'ri-list-check',
                'route' => '/executive/menus',
                'path' => 'Administrator/Menus',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 4,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Authentication Logs',
                'icon' => 'ri-time-fill',
                'route' => '/executive/authentications',
                'path' => 'Administrator/Authentications',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 5,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Activity Logs',
                'icon' => 'ri-history-line',
                'route' => '/executive/activities',
                'path' => 'Administrator/Activities',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 6,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Backup and Restore',
                'icon' => 'ri-server-line ',
                'route' => '/executive/backups',
                'path' => 'Administrator/Backups',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 7,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
        ));

        
    }
}