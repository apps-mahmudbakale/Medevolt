<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'created_at' => '2022-01-10 05:58:05',
                'description' => 'A New Built Private Hospital',
                'id' => 1,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 20,
                'role' => 'Consultants in Internal Medicine, Surgery, Pediatrics, Obstetrics and Gynecology, Radiology, Laboratory medicine',
                'slug' => 'consultants-in-internal-medicine-surgery-pediatrics-obstetrics-and-gynecology-radiology-laboratory-medicineapo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:04:14',
            ),
            1 => 
            array (
                'created_at' => '2022-01-10 05:58:41',
                'description' => 'Nil',
                'id' => 2,
                'location' => 'Sokoto',
                'qty' => 1,
                'role' => 'Consultant Radiologist',
                'slug' => 'consultant-radiologist-sokoto',
                'updated_at' => '2022-01-10 05:58:41',
            ),
            2 => 
            array (
                'created_at' => '2022-01-10 05:59:04',
                'description' => 'Nil',
                'id' => 3,
                'location' => 'Sokoto',
                'qty' => 1,
                'role' => 'Consultant Pediatrics',
                'slug' => 'consultant-pediatrics-sokoto',
                'updated_at' => '2022-01-10 05:59:04',
            ),
            3 => 
            array (
                'created_at' => '2022-01-10 06:01:49',
                'description' => 'Nil',
                'id' => 4,
                'location' => 'Sokoto',
                'qty' => 13,
                'role' => 'Medical Officer',
                'slug' => 'medical-officer-sokoto',
                'updated_at' => '2022-01-10 06:01:49',
            ),
            4 => 
            array (
                'created_at' => '2022-01-10 06:02:16',
                'description' => 'Nil',
                'id' => 5,
                'location' => 'Sokoto',
                'qty' => 2,
                'role' => 'Radiographer',
                'slug' => 'radiographer-sokoto',
                'updated_at' => '2022-01-10 06:02:16',
            ),
            5 => 
            array (
                'created_at' => '2022-01-10 06:02:43',
                'description' => 'Nil',
                'id' => 6,
                'location' => 'Gombe',
                'qty' => 1,
                'role' => 'Medical Officers',
                'slug' => 'medical-officers-gombe',
                'updated_at' => '2022-01-10 06:02:43',
            ),
            6 => 
            array (
                'created_at' => '2022-01-10 06:03:55',
                'description' => 'Nil',
                'id' => 7,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 30,
                'role' => 'Medical Officers',
                'slug' => 'medical-officers-apo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:03:55',
            ),
            7 => 
            array (
                'created_at' => '2022-01-10 06:04:45',
                'description' => 'Nil',
                'id' => 8,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 50,
                'role' => 'Nurses',
                'slug' => 'nurses-apo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:04:45',
            ),
            8 => 
            array (
                'created_at' => '2022-01-10 06:05:39',
                'description' => 'Nil',
                'id' => 9,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 5,
                'role' => 'Laboratory Scientist',
                'slug' => 'laboratory-scientist-apo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:05:39',
            ),
            9 => 
            array (
                'created_at' => '2022-01-10 06:06:21',
                'description' => 'Nil',
                'id' => 10,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 4,
                'role' => 'Pharmacist',
                'slug' => 'pharmacist-apo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:06:21',
            ),
            10 => 
            array (
                'created_at' => '2022-01-10 06:06:45',
                'description' => 'Nil',
                'id' => 11,
                'location' => 'Apo Resettlement Abuja',
                'qty' => 7,
                'role' => 'Radiographers',
                'slug' => 'radiographers-apo-resettlement-abuja',
                'updated_at' => '2022-01-10 06:06:45',
            ),
        ));
        
        
    }
}