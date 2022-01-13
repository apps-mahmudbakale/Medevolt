<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('applications')->delete();
        
        \DB::table('applications')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Mr.',
                'firstname' => 'Mubarak',
                'lastname' => 'Murtala Usman',
                'email' => 'mmurtalamubarak@gmail.com',
                'phone' => '2347039597355',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
            'role' => 'Medical Officer (MO)',
                'cv' => 'Dr Mubarak Murtala Usman_1641835542.pdf',
                'created_at' => '2022-01-10 11:25:42',
                'updated_at' => '2022-01-10 11:25:42',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Mrs.',
                'firstname' => 'Amina',
                'lastname' => 'Salaudeen',
                'email' => 'ameenahsalaudeen@gmail.com',
                'phone' => '08068274880',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Medical officer',
                'cv' => 'DR AMINA\'S RESUME_1641837289.pdf',
                'created_at' => '2022-01-10 11:54:49',
                'updated_at' => '2022-01-10 11:54:49',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Miss.',
                'firstname' => 'OTOGHILE',
                'lastname' => 'CHOICE',
                'email' => 'otoghile.choice@yahoo.com',
                'phone' => 'O8065287784',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Nursemidwife',
                'cv' => 'Choice CV_1641838682.docx',
                'created_at' => '2022-01-10 12:18:02',
                'updated_at' => '2022-01-10 12:18:02',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Miss.',
                'firstname' => 'Fatima',
                'lastname' => 'Musa',
                'email' => 'fatimamusashehu@gmail.com',
                'phone' => '08036251274',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Doctor',
                'cv' => 'Cv_1641843551.docx',
                'created_at' => '2022-01-10 13:39:11',
                'updated_at' => '2022-01-10 13:39:11',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Mr.',
                'firstname' => 'CHIJINDU',
                'lastname' => 'PRINCEWILL',
                'email' => 'jindujacobs91@gmail.com',
                'phone' => '08064774091',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'LABOURATORY SCIENTIST',
                'cv' => '12_1641847013.docx',
                'created_at' => '2022-01-10 14:36:53',
                'updated_at' => '2022-01-10 14:36:53',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Miss.',
                'firstname' => 'Mofe',
                'lastname' => 'Omatsuli',
                'email' => 'omatsulimofe@gmail.com',
                'phone' => '08145094691',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'A medical Laboratory scientist',
                'cv' => 'OMatsuli’s cv_1641895731.pdf',
                'created_at' => '2022-01-11 04:08:51',
                'updated_at' => '2022-01-11 04:08:51',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Miss.',
                'firstname' => 'Fatima',
                'lastname' => 'Yusuf',
                'email' => 'fatimahyusuf96@gmail.com',
                'phone' => '08067365787',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Medical officer',
                'cv' => 'CV_1641898932.pages',
                'created_at' => '2022-01-11 05:02:12',
                'updated_at' => '2022-01-11 05:02:12',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Mr.',
                'firstname' => 'Muhammad',
                'lastname' => 'Yusuf',
                'email' => 'mbyusufmbyusuf61@gmail.com',
                'phone' => '08068131961',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'To carry out health services to the need',
                'cv' => 'no-file.pdf',
                'created_at' => '2022-01-11 10:47:03',
                'updated_at' => '2022-01-11 10:47:03',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Mr.',
                'firstname' => 'Alasan',
                'lastname' => 'Sunusi',
                'email' => 'alasansunusi@outlook.com',
                'phone' => '08036286835',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'prevention, protection and promotion public Health',
                'cv' => 'IMG_1616707167616_1641929889.jpg',
                'created_at' => '2022-01-11 13:38:09',
                'updated_at' => '2022-01-11 13:38:09',
            ),
            9 => 
            array (
                'id' => 11,
                'title' => 'Mr.',
                'firstname' => 'Garzali hudu',
                'lastname' => 'Muhammad',
                'email' => 'garzalihudumuhammad@gmail.com',
                'phone' => '08032186315',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Environmental officers',
                'cv' => 'no-file.pdf',
                'created_at' => '2022-01-11 15:46:07',
                'updated_at' => '2022-01-11 15:46:07',
            ),
            10 => 
            array (
                'id' => 12,
                'title' => 'Miss.',
                'firstname' => 'Alye',
                'lastname' => 'Benita Iwuese',
                'email' => 'alyeiwuese@yahoo.com',
                'phone' => '08061609718',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Locum medical officer',
                'cv' => 'Dr Alye new cv_1641937927.docx',
                'created_at' => '2022-01-11 15:52:07',
                'updated_at' => '2022-01-11 15:52:07',
            ),
            11 => 
            array (
                'id' => 13,
                'title' => 'Mrs.',
                'firstname' => 'ASMAÚ',
                'lastname' => 'AMBALI-BELGORE',
                'email' => 'asmee2003@yahoo.com',
                'phone' => '08063453959',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'INTERPRET RADIOLOGICAL IMAGES',
                'cv' => 'CV Asmau Ambali_1641981228.doc',
                'created_at' => '2022-01-12 03:53:48',
                'updated_at' => '2022-01-12 03:53:48',
            ),
            12 => 
            array (
                'id' => 14,
                'title' => 'Mr.',
                'firstname' => 'Musa Abdulkareem',
                'lastname' => 'Halliru',
                'email' => 'Abdulkareemmusa7@gmail.com',
                'phone' => '+2348069464897',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'Radiographer',
                'cv' => 'Current CV_1642013066.pdf',
                'created_at' => '2022-01-12 12:44:26',
                'updated_at' => '2022-01-12 12:44:26',
            ),
            13 => 
            array (
                'id' => 15,
                'title' => 'Mr.',
                'firstname' => 'Muzammil',
                'lastname' => 'Aminu',
                'email' => 'muxamm99@gmail.com',
                'phone' => '07060543937',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'Radiographer/sonographer',
                'cv' => 'MY CV PROPER_1642013948.docx',
                'created_at' => '2022-01-12 12:59:08',
                'updated_at' => '2022-01-12 12:59:08',
            ),
            14 => 
            array (
                'id' => 16,
                'title' => 'Mr.',
                'firstname' => 'Ishaya',
                'lastname' => 'Wycliffe',
                'email' => 'wycliffeishaya10@yahoo.com',
                'phone' => '08032179985',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Medical Doctor',
                'cv' => 'WYCLIFFE ISHAYA_CV_1642014538.doc',
                'created_at' => '2022-01-12 13:08:58',
                'updated_at' => '2022-01-12 13:08:58',
            ),
            15 => 
            array (
                'id' => 17,
                'title' => 'Mr.',
                'firstname' => 'Abubakar',
                'lastname' => 'Sharhabilu',
                'email' => 'sharhabiluabubakarwarrah001@gmail.com',
                'phone' => '08165935270',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'Diagnostic Radiographer',
                'cv' => 'My CV_1642015030.docx',
                'created_at' => '2022-01-12 13:17:10',
                'updated_at' => '2022-01-12 13:17:10',
            ),
            16 => 
            array (
                'id' => 18,
                'title' => 'Mr.',
                'firstname' => 'Emmanuel',
                'lastname' => 'Okeke',
                'email' => 'emmariokeke@gmail.com',
                'phone' => '07037949299',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'To improve on HEALTHCARE of my patients via quality and patient friendly services',
                'cv' => 'Pdf CV-converted_1642015190.pdf',
                'created_at' => '2022-01-12 13:19:50',
                'updated_at' => '2022-01-12 13:19:50',
            ),
            17 => 
            array (
                'id' => 19,
                'title' => 'Mr.',
                'firstname' => 'Timothy',
                'lastname' => 'Jawa',
                'email' => 'jawatadamu@gmail.com',
                'phone' => '07061912419',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Medical consultation in paediatrics, Internal medicine, surgery, obstetrics and gynaecology..',
                'cv' => 'Adamu Timothy JAWA. CV._1642015685.doc',
                'created_at' => '2022-01-12 13:28:05',
                'updated_at' => '2022-01-12 13:28:05',
            ),
            18 => 
            array (
                'id' => 20,
                'title' => 'Mr.',
                'firstname' => 'Salis',
                'lastname' => 'Muhammad Yusuf',
                'email' => 'salisyusuf95@gmail.com',
                'phone' => '07010919510',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'Radiographer',
            'cv' => 'Resume (cv)_1642017199.docx',
                'created_at' => '2022-01-12 13:53:19',
                'updated_at' => '2022-01-12 13:53:19',
            ),
            19 => 
            array (
                'id' => 21,
                'title' => 'Miss.',
                'firstname' => 'Adatina\'a',
                'lastname' => 'Dewa',
                'email' => 'Wycliffeadati@gmail.com',
                'phone' => '08034823315',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Professional care giver',
                'cv' => 'adatinaa_1642018600.docx',
                'created_at' => '2022-01-12 14:16:40',
                'updated_at' => '2022-01-12 14:16:40',
            ),
            20 => 
            array (
                'id' => 22,
                'title' => 'Mr.',
                'firstname' => 'Maduwan',
                'lastname' => 'Daniel',
                'email' => 'danielmaduwan2015@gmail.com',
                'phone' => '+2349030515524',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Taking care of client who needs nursing care, collaborate with other professional to achieve optimal service delivery to client. Participate in relevant research work to promote client satisfaction.',
                'cv' => 'My CV_1642021057.doc',
                'created_at' => '2022-01-12 14:57:37',
                'updated_at' => '2022-01-12 14:57:37',
            ),
            21 => 
            array (
                'id' => 23,
                'title' => 'Miss.',
                'firstname' => 'Fatima',
                'lastname' => 'Gaila',
                'email' => 'timagaila@yahoo.com',
                'phone' => '08108322949',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'Medical Officer',
                'cv' => 'FATIMA GAILA SHUWA CV 2 2_1642024523.docx',
                'created_at' => '2022-01-12 15:55:23',
                'updated_at' => '2022-01-12 15:55:23',
            ),
            22 => 
            array (
                'id' => 24,
                'title' => 'Mr.',
                'firstname' => 'Elijah',
                'lastname' => 'James Wida',
                'email' => 'jameselijahwida@gmail.com',
                'phone' => '+2347067180878',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Doctors',
                'role' => 'An Emergency physician as I have worked in many different emergency settings and have gained all the necessary experience to practice effectively.',
                'cv' => 'Elijah_1642027971.docx',
                'created_at' => '2022-01-12 16:52:51',
                'updated_at' => '2022-01-12 16:52:51',
            ),
            23 => 
            array (
                'id' => 25,
                'title' => 'Mr.',
                'firstname' => 'Ahmad',
                'lastname' => 'Abdussalam Inuwa',
                'email' => 'ahmadabdussalaminuwa@gmail.com',
                'phone' => '07030022660',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Allied Health',
                'role' => 'Radiographer',
                'cv' => 'Feb 15, Doc 1_1642044861.pdf',
                'created_at' => '2022-01-12 21:34:21',
                'updated_at' => '2022-01-12 21:34:21',
            ),
            // 24 => 
            // array (
            //     'id' => 26,
            //     'title' => 'Mr.',
            //     'firstname' => 'John',
            //     'lastname' => 'Cosmos Amos',
            //     'email' => '00000murma@gmail.com',
            //     'phone' => '07061921845',
            //     'job_type' => 'Full-Time',
            //     'career' => 'MedeVolt Nursing',
            //     'role' => 'Anaesthesia',
            //     'cv' => 'COSMOS CV_1642058087.docx',
            //     'created_at' => '2022-01-13 01:14:47',
            //     'updated_at' => '2022-01-13 01:14:47',
            // ),
            25 => 
            array (
                'id' => 27,
                'title' => 'Mr.',
                'firstname' => 'John',
                'lastname' => 'Cosmos Amos',
                'email' => '00000murma@gmail.com',
                'phone' => '07061921845',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Anaesthesia',
                'cv' => 'COSMOS CV_1642058089.docx',
                'created_at' => '2022-01-13 01:14:49',
                'updated_at' => '2022-01-13 01:14:49',
            ),
            26 => 
            array (
                'id' => 28,
                'title' => 'Mr.',
                'firstname' => 'Leviticus',
                'lastname' => 'Meky',
                'email' => 'leviticusmeky222@gmail.com',
                'phone' => '+2348082817435',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Nutrition, paediatric and emergency',
                'cv' => 'leviticus Meky CV 01_1642060466.pdf',
                'created_at' => '2022-01-13 01:54:26',
                'updated_at' => '2022-01-13 01:54:26',
            ),
            27 => 
            array (
                'id' => 29,
                'title' => 'Mr.',
                'firstname' => 'Innocent',
                'lastname' => 'Stephen',
                'email' => 'stepheninnocent525@gmail.com',
                'phone' => '09137739399',
                'job_type' => 'Full-Time',
                'career' => 'MedeVolt Nursing',
                'role' => 'Nursing care of patients using the standard nursing process of assessment, Diagnosis, Outcome identification, planning, implications and Evaluation.

Carried out other roles as directed.',
                'cv' => 'Innocent Stephen cv-1_1642062473.docx',
                'created_at' => '2022-01-13 02:27:53',
                'updated_at' => '2022-01-13 02:27:53',
            ),
        ));
        
        
    }
}