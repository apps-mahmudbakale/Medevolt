<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-24 07:58:31',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'create-users',
                'updated_at' => '2022-03-24 07:58:31',
            ),
            1 => 
            array (
                'created_at' => '2022-03-24 07:58:32',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'create-roles',
                'updated_at' => '2022-03-24 07:58:32',
            ),
            2 => 
            array (
                'created_at' => '2022-03-24 07:58:32',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'create-recruites',
                'updated_at' => '2022-03-24 07:58:32',
            ),
            3 => 
            array (
                'created_at' => '2022-03-24 07:58:33',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'create-jobs',
                'updated_at' => '2022-03-24 07:58:33',
            ),
            4 => 
            array (
                'created_at' => '2022-03-24 07:58:33',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'create-documents',
                'updated_at' => '2022-03-24 07:58:33',
            ),
            5 => 
            array (
                'created_at' => '2022-03-24 07:58:34',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'create-news',
                'updated_at' => '2022-03-24 07:58:34',
            ),
            6 => 
            array (
                'created_at' => '2022-03-24 07:58:34',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'create-blog',
                'updated_at' => '2022-03-24 07:58:34',
            ),
            7 => 
            array (
                'created_at' => '2022-03-24 07:58:34',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'read-users',
                'updated_at' => '2022-03-24 07:58:34',
            ),
            8 => 
            array (
                'created_at' => '2022-03-24 07:58:35',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'read-roles',
                'updated_at' => '2022-03-24 07:58:35',
            ),
            9 => 
            array (
                'created_at' => '2022-03-24 07:58:36',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'read-recruites',
                'updated_at' => '2022-03-24 07:58:36',
            ),
            10 => 
            array (
                'created_at' => '2022-03-24 07:58:36',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'read-jobs',
                'updated_at' => '2022-03-24 07:58:36',
            ),
            11 => 
            array (
                'created_at' => '2022-03-24 07:58:37',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'read-documents',
                'updated_at' => '2022-03-24 07:58:37',
            ),
            12 => 
            array (
                'created_at' => '2022-03-24 07:58:37',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'read-news',
                'updated_at' => '2022-03-24 07:58:37',
            ),
            13 => 
            array (
                'created_at' => '2022-03-24 07:58:39',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'read-blog',
                'updated_at' => '2022-03-24 07:58:39',
            ),
            14 => 
            array (
                'created_at' => '2022-03-24 07:58:39',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'update-users',
                'updated_at' => '2022-03-24 07:58:39',
            ),
            15 => 
            array (
                'created_at' => '2022-03-24 07:58:39',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'update-roles',
                'updated_at' => '2022-03-24 07:58:39',
            ),
            16 => 
            array (
                'created_at' => '2022-03-24 07:58:40',
                'guard_name' => 'web',
                'id' => 17,
                'name' => 'update-recruites',
                'updated_at' => '2022-03-24 07:58:40',
            ),
            17 => 
            array (
                'created_at' => '2022-03-24 07:58:42',
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'update-jobs',
                'updated_at' => '2022-03-24 07:58:42',
            ),
            18 => 
            array (
                'created_at' => '2022-03-24 07:58:42',
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'update-documents',
                'updated_at' => '2022-03-24 07:58:42',
            ),
            19 => 
            array (
                'created_at' => '2022-03-24 07:58:42',
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'update-news',
                'updated_at' => '2022-03-24 07:58:42',
            ),
            20 => 
            array (
                'created_at' => '2022-03-24 07:58:43',
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'update-blog',
                'updated_at' => '2022-03-24 07:58:43',
            ),
            21 => 
            array (
                'created_at' => '2022-03-24 07:58:43',
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'delete-users',
                'updated_at' => '2022-03-24 07:58:43',
            ),
            22 => 
            array (
                'created_at' => '2022-03-24 07:58:45',
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'delete-roles',
                'updated_at' => '2022-03-24 07:58:45',
            ),
            23 => 
            array (
                'created_at' => '2022-03-24 07:58:45',
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'delete-recruites',
                'updated_at' => '2022-03-24 07:58:45',
            ),
            24 => 
            array (
                'created_at' => '2022-03-24 07:58:45',
                'guard_name' => 'web',
                'id' => 25,
                'name' => 'delete-jobs',
                'updated_at' => '2022-03-24 07:58:45',
            ),
            25 => 
            array (
                'created_at' => '2022-03-24 07:58:46',
                'guard_name' => 'web',
                'id' => 26,
                'name' => 'delete-documents',
                'updated_at' => '2022-03-24 07:58:46',
            ),
            26 => 
            array (
                'created_at' => '2022-03-24 07:58:46',
                'guard_name' => 'web',
                'id' => 27,
                'name' => 'delete-news',
                'updated_at' => '2022-03-24 07:58:46',
            ),
            27 => 
            array (
                'created_at' => '2022-03-24 07:58:46',
                'guard_name' => 'web',
                'id' => 28,
                'name' => 'delete-blog',
                'updated_at' => '2022-03-24 07:58:46',
            ),
        ));
        
        
    }
}