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
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gvWbvxJPg6G40UzZ1b18EuMrpGVZ51m2knxvii2FGnWI5fARqlbV2',
                'remember_token' => NULL,
                'created_at' => '2022-01-10 05:57:43',
                'updated_at' => '2022-01-10 05:57:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dr. Shamsuddeen Aliyu',
                'email' => 's.a.aliyu@foresighthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b76cg2Ug0iEmqWUkAmBWxum38vfKeFwwHVddpM67g8oJihTuu/76K',
                'remember_token' => 'h2rnyUfPhS0lRLfZCgzxRDwY1nfnQslFFMe6js4aO08TpsoTJfRNXOsJ3ywk',
                'created_at' => '2022-01-11 04:25:33',
                'updated_at' => '2022-01-11 04:25:33',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sales',
                'email' => 'contact@medevolthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MAg2CJ2wNcngu92mmaAT4uYH5BAJifR9eYFXu0xNe.YGEi91u0JfO',
                'remember_token' => NULL,
                'created_at' => '2022-01-12 10:11:20',
                'updated_at' => '2022-01-12 10:11:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Aisha M sani',
                'email' => 'aishamsudden@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WzQyTbKmmnVQC.6QwAmmxOpLoacCKd1VQZAV.opzj0YnlCnrMt16O',
                'remember_token' => NULL,
                'created_at' => '2022-01-12 10:45:10',
                'updated_at' => '2022-01-12 10:45:10',
            ),
        ));
        
        
    }
}