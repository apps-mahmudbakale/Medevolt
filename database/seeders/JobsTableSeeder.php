<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'Consultants in Internal Medicine, Surgery, Pediatrics, Obstetrics and Gynecology, Radiology, Laboratory medicine',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 20,
                'description' => 'A New Built Private Hospital',
                'slug' => Str::slug('Consultants in Internal Medicine , Surgery, Pediatrics, Obstetrics and Gynecology, Radiology, Laboratory medicineApo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 05:58:05',
                'updated_at' => '2022-01-10 06:04:14',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'Consultant Radiologist',
                'location' => 'Sokoto',
                'qty' => 1,
                'description' => 'Nil',
                'slug' => Str::slug('Consultant Radiologist Sokoto', '-'),
                'created_at' => '2022-01-10 05:58:41',
                'updated_at' => '2022-01-10 05:58:41',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'Consultant Pediatrics',
                'location' => 'Sokoto',
                'qty' => 1,
                'description' => 'Nil',
                'slug' => Str::slug('Consultant Pediatrics Sokoto', '-'),
                'created_at' => '2022-01-10 05:59:04',
                'updated_at' => '2022-01-10 05:59:04',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'Medical Officer',
                'location' => 'Sokoto',
                'qty' => 13,
                'description' => 'Nil',
                'slug' => Str::slug('Medical Officer Sokoto', '-'),
                'created_at' => '2022-01-10 06:01:49',
                'updated_at' => '2022-01-10 06:01:49',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'Radiographer',
                'location' => 'Sokoto',
                'qty' => 2,
                'description' => 'Nil',
                'slug' => Str::slug('Radiographer Sokoto', '-'),
                'created_at' => '2022-01-10 06:02:16',
                'updated_at' => '2022-01-10 06:02:16',
            ),
            5 => 
            array (
                'id' => 6,
                'role' => 'Medical Officers',
                'location' => 'Gombe',
                'qty' => 1,
                'description' => 'Nil',
                'slug' => Str::slug('Medical Officers Gombe', '-'),
                'created_at' => '2022-01-10 06:02:43',
                'updated_at' => '2022-01-10 06:02:43',
            ),
            6 => 
            array (
                'id' => 7,
                'role' => 'Medical Officers',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 30,
                'description' => 'Nil',
                'slug' => Str::slug('Medical Officers Apo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 06:03:55',
                'updated_at' => '2022-01-10 06:03:55',
            ),
            7 => 
            array (
                'id' => 8,
                'role' => 'Nurses',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 50,
                'description' => 'Nil',
                'slug' => Str::slug('Nurses Apo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 06:04:45',
                'updated_at' => '2022-01-10 06:04:45',
            ),
            8 => 
            array (
                'id' => 9,
                'role' => 'Laboratory Scientist',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 5,
                'description' => 'Nil',
                'slug' => Str::slug('Laboratory Scientist Apo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 06:05:39',
                'updated_at' => '2022-01-10 06:05:39',
            ),
            9 => 
            array (
                'id' => 10,
                'role' => 'Pharmacist',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 4,
                'description' => 'Nil',
                'slug' => Str::slug('Pharmacist Apo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 06:06:21',
                'updated_at' => '2022-01-10 06:06:21',
            ),
            10 => 
            array (
                'id' => 11,
                'role' => 'Radiographers',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 7,
                'description' => 'Nil',
                'slug' => Str::slug('Radiographers Apo Resettlement Abuja', '-'),
                'created_at' => '2022-01-10 06:06:45',
                'updated_at' => '2022-01-10 06:06:45',
            ),
        ));
        
        
    }
}