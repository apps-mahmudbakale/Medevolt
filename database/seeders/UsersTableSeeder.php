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
            1 => 
            array (
                'created_at' => '2022-11-23 20:23:34',
                'email' => 'bakale.mahmud@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Mahmud Bakale',
                'password' => '$2y$10$regwQaO2M9s24WMD96p.3eKLI.vE8xpaBKd.40ib0mO4I67JLtloG',
                'remember_token' => NULL,
                'updated_at' => '2022-11-23 20:23:34',
            ),
        ));
        
        
    }
}