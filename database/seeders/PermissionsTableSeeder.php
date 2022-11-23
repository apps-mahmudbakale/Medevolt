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
                'id' => 1,
                'name' => 'create-users',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'create-roles',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create-recruites',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'create-jobs',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'create-documents',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'create-news',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'create-blog',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'read-users',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'read-roles',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'read-recruites',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'read-jobs',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'read-documents',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'read-news',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'read-blog',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'update-users',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'update-roles',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'update-recruites',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'update-jobs',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'update-documents',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'update-news',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'update-blog',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'delete-users',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'delete-roles',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'delete-recruites',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'delete-jobs',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'delete-documents',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'delete-news',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'delete-blog',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'download-cv',
                'guard_name' => 'web',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
        ));
        
        
    }
}