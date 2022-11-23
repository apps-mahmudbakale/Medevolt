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
                'password' => '$2y$10$s3wcKY57BwC6DvUBBdbpeu.egiZaKHq5rzzui3dxTlfmlIgu9s7kO',
                'remember_token' => 'z9tbs1Swb9vsKu1zvpdVWbJinS629MLV7pkuEDlvbqQ13eShjBDom9Vwxbvp',
                'created_at' => '2022-01-14 11:05:42',
                'updated_at' => '2022-01-14 11:05:42',
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Super Admin',
                'email' => 'aliyuhaidara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/oGmEwU7vWsVTo9Uy.TL2.KpUzYP6rGbnY1VSEBpCodinq12O..xK',
                'remember_token' => '92LBtJXMUwGkQufTluSJV31rNWM1LTKo1ZuHgOXH1aRg9wW3Kz9XHFvXMEMa',
                'created_at' => '2022-01-16 08:30:58',
                'updated_at' => '2022-01-16 08:30:58',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'Ikilima Ismail',
                'email' => 'ikilima.ismail@medevolthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WYea9xo2sOgSXwa14B.D3eoFy6.QuT6rh.u0.ImAsVUGQK2ZzqjZW',
                'remember_token' => 'OiZFQDZZeW7TZgBpc8dJbZDkFlYmj1tFpzggXiMKGVTGkG13xm3V646lFl3w',
                'created_at' => '2022-01-16 08:40:54',
                'updated_at' => '2022-01-16 08:40:54',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Sales',
                'email' => 'contact@medevolthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hW9pV/nAb4zNLYWfVE47DewbO4SnJbQ4iWRORWY54YVBSzM2GCyZG',
                'remember_token' => '9074uteKOKOiooO4A0tPwdNHP3dYDUYMrlDzY4cTLcBWOYwhIhuYXDYvU1Mu',
                'created_at' => '2022-01-16 08:41:36',
                'updated_at' => '2022-01-16 08:41:36',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Info',
                'email' => 'info@medevolthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BOdRfA46atpGg89.eaOgfe49UQCcCpo76r6JYR1F4Mp2YS0sOQlFu',
                'remember_token' => 'lcd7zpHtzu2d98t49lfpsM0vsxKbXVxR6J3gQ9EKS4rPAQIC1I20Vn0kxy6D',
                'created_at' => '2022-01-16 08:42:09',
                'updated_at' => '2022-01-16 08:42:09',
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'Aisha Muhammad Sani',
                'email' => 'aisha.sani@medevolthealthcare.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HUYPbSMut6TpDktTKihHge2FaziQHDMqALUSRiFYNJ2P4EY1PTsoS',
                'remember_token' => 'dZnEarbtlcDoAXh6db3K3Ikh3jHnKY1YkUWHXy3OoodaxSe7WHd9cuH9R9zy',
                'created_at' => '2022-01-22 20:06:22',
                'updated_at' => '2022-01-22 20:06:22',
            ),
            6 => 
            array (
                'id' => 13,
                'name' => 'Segun Lawal',
                'email' => 'segunlado4me@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pT0buQYohV6NaZgiZksq.OR7mIv7K9kXxuv.Qx33cARbxbm7tAJBG',
                'remember_token' => 'ZAxTFpQnUh8hw4GoTukq9SgmCxw3wZemdAHAvTsCl6UFjuSOVgCg8TgOLu29',
                'created_at' => '2022-02-21 19:24:43',
                'updated_at' => '2022-02-21 19:24:43',
            ),
            7 => 
            array (
                'id' => 14,
                'name' => 'Dr. Abdullahi Baba Abdul',
                'email' => 'babaabdul2003@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ys8W.pTSKixorBJK2cttEuWVRNm4OfAGHTlOIgz1x2LLDSPnKTM7e',
                'remember_token' => NULL,
                'created_at' => '2022-07-18 16:57:06',
                'updated_at' => '2022-07-18 16:57:06',
            ),
        ));
        
        
    }
}