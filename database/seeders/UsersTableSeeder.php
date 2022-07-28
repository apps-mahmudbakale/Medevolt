<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-24 07:58:29',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$m3B9BI9HiUggtZOvhvtOte0E5z2lLb2hlqItafgOeyTatyOyAaSF6',
                'remember_token' => NULL,
                'updated_at' => '2022-03-24 07:58:29',
            ),
        ));
        
        
    }
}