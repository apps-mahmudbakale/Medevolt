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
                'id' => 1,
                'role' => 'Consultants in Internal Medicine',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Consultants in Internal Medicine</p><p><span style="font-weight: bolder;">Location:&nbsp;</span>Apo Resettlement Abuja</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Consultants in Internal Medicine to work in a new hospital located at Apo Resettlement Abuja, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;<span style="font-weight: bolder;">info</span><span style="font-weight: bolder;">@medevolthealthcare.com</span>&nbsp;or call us on&nbsp;<span style="font-weight: bolder;">+2347049225550</span>.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultants-in-internal-medicine-surgery-pediatrics-obstetrics-and-gynecology-radiology-laboratory-medicineapo-resettlement-abuja',
                'created_at' => '2022-01-10 05:58:05',
                'updated_at' => '2022-03-22 22:55:14',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'Consultant Radiologist',
                'location' => 'Sokoto',
                'qty' => 1,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Consultants Radiologist</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Sokoto</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for&nbsp;Consultant Radiologist to work in a&nbsp; hospital located at Sokoto, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-radiologist-sokoto',
                'created_at' => '2022-01-10 05:58:41',
                'updated_at' => '2022-03-22 23:00:08',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'Consultant Pediatrics',
                'location' => 'Sokoto',
                'qty' => 1,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Consultant Pediatrics</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Sokoto</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for consultant Pediatrics to work in a new hospital located at Sokoto, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-pediatrics-sokoto',
                'created_at' => '2022-01-10 05:59:04',
                'updated_at' => '2022-03-22 23:01:20',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'Medical Officer',
                'location' => 'Sokoto',
                'qty' => 13,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Medical Officer</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Sokoto</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'medical-officer-sokoto',
                'created_at' => '2022-01-10 06:01:49',
                'updated_at' => '2022-03-23 11:19:07',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'Radiographer',
                'location' => 'Sokoto',
                'qty' => 2,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Radiographer</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Sokoto</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Radiographer to work in a hospital located at Sokoto, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'radiographer-sokoto',
                'created_at' => '2022-01-10 06:02:16',
                'updated_at' => '2022-03-22 23:02:13',
            ),
            5 => 
            array (
                'id' => 7,
                'role' => 'Medical Officers',
                'location' => 'Apo Abuja',
                'qty' => 30,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Medical Officer</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Apo Resettlement Abuja</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for&nbsp;Medical Officer &nbsp;to work in a new hospital located at Apo Resettlement Abuja, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'medical-officers-apo-resettlement-abuja',
                'created_at' => '2022-01-10 06:03:55',
                'updated_at' => '2022-03-22 23:02:42',
            ),
            6 => 
            array (
                'id' => 8,
                'role' => 'Nurses',
                'location' => 'Apo Abuja',
                'qty' => 50,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Nurse</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Apo  Abuja&nbsp;</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Nurses&nbsp; to work in a new hospital located at Apo Resettlement, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'nurses-apo-resettlement-abuja',
                'created_at' => '2022-01-10 06:04:45',
                'updated_at' => '2022-03-22 23:03:13',
            ),
            7 => 
            array (
                'id' => 9,
                'role' => 'Laboratory Scientist',
                'location' => 'Apo  Abuja',
                'qty' => 5,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Laboratory Scientist</p><p><span style="font-weight: bolder;">Location:</span>&nbsp; Apo  Abuja</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Medical Laboratory Scientists to work in a new hospital located at Apo Resettlement Abuja, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'laboratory-scientist-apo-resettlement-abuja',
                'created_at' => '2022-01-10 06:05:39',
                'updated_at' => '2022-03-22 23:03:40',
            ),
            8 => 
            array (
                'id' => 10,
                'role' => 'Pharmacist',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 4,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Pharmacist</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Apo Resettlement Abuja</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Pharmacist&nbsp; to work in a new hospital located at Apo Resettlement Abuja, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'pharmacist-apo-resettlement-abuja',
                'created_at' => '2022-01-10 06:06:21',
                'updated_at' => '2022-03-22 23:04:07',
            ),
            9 => 
            array (
                'id' => 11,
                'role' => 'Radiographers',
                'location' => 'Apo Resettlement Abuja',
                'qty' => 7,
                'description' => '<p><span style="font-weight: bolder;">Role:</span>&nbsp;Radiographers</p><p><span style="font-weight: bolder;">Location:</span>&nbsp;Apo Resettlement Abuja</p><p><span style="font-weight: bolder;">Position:</span>&nbsp;full-time</p><p>Medevolt Healthcare are currently seeking for Radiographers&nbsp; to work in a new hospital located at Apo Resettlement Abuja, Nigeria.</p><p><span style="font-weight: bolder;">Contract Type:</span>&nbsp;Full-time</p><p><span style="font-weight: bolder;">Length &amp; Details:</span>&nbsp;As soon as possible</p><p><span style="font-weight: bolder;">Rate of Pay:</span>&nbsp;Competitive Rates Offered</p><p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'radiographers-apo-resettlement-abuja',
                'created_at' => '2022-01-10 06:06:45',
                'updated_at' => '2022-03-22 23:04:29',
            ),
            10 => 
            array (
                'id' => 13,
                'role' => 'Anesthetic Nurse',
                'location' => 'Birnin Kebbi, Kebbi',
                'qty' => 1,
                'description' => '<p><b>Role:</b>&nbsp;Anesthetic Nurse</p>
<p><b>Location:</b>&nbsp;Birnin Kebbi, Kebbi</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for an Anesthetic Nurse to work in a hospital located at<span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">&nbsp;</span><span style="text-align: var(--bs-body-text-align);">Birnin Kebbi, Kebbi</span><span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">&nbsp;Nigeria.</span></p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'anesthetic-nurse-birnin-kebbi-kebbi',
                'created_at' => '2022-01-21 13:18:42',
                'updated_at' => '2022-03-23 11:12:05',
            ),
            11 => 
            array (
                'id' => 14,
                'role' => 'Scrub Nurse',
                'location' => 'Birnin Kebbi, Kebbi',
                'qty' => 1,
                'description' => '<p><b>Role:</b>&nbsp;Scrub Nurse</p>
<p><b>Location:</b>&nbsp;Birnin Kebbi, Kebbi</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently looking for a sctrub nurse to work in a hospital located at Birnin Kebbi, Kebbi, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'scrub-nurse-birnin-kebbi-kebbi',
                'created_at' => '2022-01-21 13:20:37',
                'updated_at' => '2022-03-23 11:12:35',
            ),
            12 => 
            array (
                'id' => 15,
                'role' => 'General Nurse',
                'location' => 'Birnin Kebbi, Kebbi',
                'qty' => 1,
                'description' => '<p><b>Role:</b>&nbsp;General Nurse</p>
<p><b>Location:</b>&nbsp;Birnin Kebbi, Kebbi</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for a General Nurse to work in a hospital located at<span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">&nbsp;</span><span style="text-align: var(--bs-body-text-align);">Birnin Kebbi, Kebbi</span><span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">, Nigeria.</span></p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'general-nurse-birnin-kebbi-kebbi',
                'created_at' => '2022-01-21 13:24:32',
                'updated_at' => '2022-03-23 11:13:01',
            ),
            13 => 
            array (
                'id' => 16,
                'role' => 'Medical Doctor',
                'location' => 'Birnin Kebbi, Kebbi',
                'qty' => 1,
                'description' => '<p><b>Role:</b>&nbsp;Medical Doctor</p>
<p><b>Location:</b>&nbsp;Birnin Kebbi, Kebbi</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for a Medical Doctor to work in a hospital located at Birnin Kebbi, Kebbi , Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'medical-doctor-birnin-kebbi-kebbi',
                'created_at' => '2022-01-21 13:27:01',
                'updated_at' => '2022-03-23 11:13:26',
            ),
            14 => 
            array (
                'id' => 17,
                'role' => 'Physiotherapist',
                'location' => 'Apo Resettlement, Abuja',
                'qty' => 10,
                'description' => '<p><b>Role:</b>&nbsp;Physiotherapist</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Physiotherapists to work in a new Hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'physiotherapist-apo-resettlement-abuja',
                'created_at' => '2022-02-24 14:48:12',
                'updated_at' => '2022-03-23 11:13:59',
            ),
            15 => 
            array (
                'id' => 18,
                'role' => 'Nutritionist',
                'location' => 'Apo Resettlement, Abuja',
                'qty' => 7,
                'description' => '<p><b>Role:</b>&nbsp;Nutritionist</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Nutritionists to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'nutritionist-apo-resettlement-abuja',
                'created_at' => '2022-02-24 14:54:07',
                'updated_at' => '2022-03-23 11:14:38',
            ),
            16 => 
            array (
                'id' => 19,
                'role' => 'Bio-Medical Engineers',
                'location' => 'Apo Resettlement, Abuja',
                'qty' => 10,
            'description' => '<p><b>Role:</b>&nbsp;Bio-Medical Engineers</p><p><b style="font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);">Location:</b><span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);"> Apo resettlement, Abuja</span></p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Bio-Medical Engineers to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'bio-medical-engineers-apo-resettlement-abuja',
                'created_at' => '2022-02-24 14:56:29',
                'updated_at' => '2022-03-23 11:15:47',
            ),
            17 => 
            array (
                'id' => 20,
                'role' => 'Medical Physicist',
                'location' => 'Apo Resettlement, Abuja',
                'qty' => 5,
                'description' => '<p><b>Role:</b>&nbsp;Medical Physicist</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Medical Physicists to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'medical-physicist-apo-resettlement-abuja',
                'created_at' => '2022-02-24 14:59:22',
                'updated_at' => '2022-03-23 11:16:18',
            ),
            18 => 
            array (
                'id' => 22,
                'role' => 'Paramedics',
                'location' => 'Apo Resettlement, Abuja',
                'qty' => 20,
                'description' => '<p><b>Role:</b>&nbsp;Paramedics</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Paramedics to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'paramedics-apo-resettlement-abuja',
                'created_at' => '2022-02-24 15:06:36',
                'updated_at' => '2022-03-23 11:16:42',
            ),
            19 => 
            array (
                'id' => 23,
                'role' => 'Medical Records',
                'location' => 'Apo  Abuja',
                'qty' => 25,
                'description' => '<p><b>Role:</b>&nbsp;Medical Records</p>
<p><b>Location:</b> Apo  Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare is currently seeking for Medical Recorders to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'medical-records-apo-resettlement-abuja',
                'created_at' => '2022-02-24 15:12:04',
                'updated_at' => '2022-03-23 11:17:12',
            ),
            20 => 
            array (
                'id' => 24,
                'role' => 'Consultant surgeons',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants Surgeons</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-surgeon-apo',
                'created_at' => '2022-03-11 09:53:53',
                'updated_at' => '2022-03-23 11:17:51',
            ),
            21 => 
            array (
                'id' => 25,
                'role' => 'Consultant Paediatricians',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants  Paediatricians</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length & Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested and wish to receive more information about the job then please send your CV to: <b>info@medevolthealthcare.com/contact@medevolthealthcare.com</b> or call us on <b>+2347049225550</b>.</p>
<p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-paediatricians-apo-abuja',
                'created_at' => '2022-03-11 09:59:56',
                'updated_at' => '2022-03-11 09:59:56',
            ),
            22 => 
            array (
                'id' => 26,
                'role' => 'Consultant Obstetrician',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants obstetrician</p>
<p><b>Location:</b> Apo, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-obstetrician-apo-abuja',
                'created_at' => '2022-03-11 10:04:20',
                'updated_at' => '2022-03-23 11:19:46',
            ),
            23 => 
            array (
                'id' => 27,
                'role' => 'Consultant Gynaecologist',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants Gynaecologist</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-gynaecologist-apo-abuja',
                'created_at' => '2022-03-11 10:07:52',
                'updated_at' => '2022-03-23 11:20:13',
            ),
            24 => 
            array (
                'id' => 28,
                'role' => 'Consultant Radiologists',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants Radiologists</p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-radiologists-apo-abuja',
                'created_at' => '2022-03-11 11:26:19',
                'updated_at' => '2022-03-23 11:20:38',
            ),
            25 => 
            array (
                'id' => 29,
                'role' => 'Consultant Laboratory Medicine.',
                'location' => 'Apo Abuja',
                'qty' => 3,
                'description' => '<p><b>Role:</b> Consultants Laboratory Medicine </p>
<p><b>Location:</b> Apo resettlement, Abuja</p>
<p><b>Position:</b> full-time</p>
<p>Medevolt Healthcare are currently seeking for consultants in different medical Specialties to work in a new hospital located at Apo resettlement Abuja, Nigeria.</p>
<p><b>Contract Type:</b> Full-time</p>
<p><b>Length &amp; Details:</b> As soon as possible</p>
<p><b>Rate of Pay:</b> Competitive Rates Offered</p>

<p>If you are interested please and wish to receive more information about the job then please send a mail to:&nbsp;info@medevolthealthcare.com&nbsp;or call us on&nbsp;+2347049225550.</p><p>Medevolt Healthcare is an equal opportunities employer. If you have any specific requirements or require assistance or reasonable adjustments to be made for you during the selection process due to disability or long-term health condition, we will do our best to assist you.</p>',
                'slug' => 'consultant-laboratory-medicine-apo-abuja',
                'created_at' => '2022-03-11 11:30:13',
                'updated_at' => '2022-03-23 11:21:01',
            ),
        ));
        
        
    }
}