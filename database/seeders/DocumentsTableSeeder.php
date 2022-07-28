<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documents')->delete();
        
        \DB::table('documents')->insert(array (
            0 => 
            array (
                'created_at' => '2022-01-12 10:29:52',
                'cv' => 'INTERNAL MEMO December Get Togather_1642004992.pdf',
                'degree' => 'INTERNAL MEMO -Request to pay for HSG procedure_1642004992.pdf',
                'drivers_licence' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'fullname' => 'Shamsuddeen Aliyu',
                'guarantor_form' => 'INTERNAL MEMO -Request to Pay for AMAC Fumigation._1642004992.pdf',
                'id' => 1,
                'identity' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'licence' => 'INTERNAL MEMO -Request to Pay for Covid Test Investigation_1642004992.pdf',
                'photo' => 'INTERNAL MEMO -Request to pay for HSG procedure_1642004992.pdf',
                'proof_add_one' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'proof_add_two' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'refone' => 'INTERNAL MEMO December Get Togather_1642004992.pdf',
            'reftwo' => 'INTERNAL MEMO- IMPREST RIMBURESMENT (1) (1)_1642004992.pdf',
                'updated_at' => '2022-01-12 10:29:52',
            ),
            1 => 
            array (
                'created_at' => '2022-03-30 09:57:12',
                'cv' => 'JAAS.MS.ID.000172_1648634232.pdf',
                'degree' => 'laravel_1648634232.pdf',
                'drivers_licence' => 'laravel_1648634232.pdf',
                'fullname' => 'Mahmud Bakale',
                'guarantor_form' => 'AJLPRA_sRiv4DfM_1648634232.pdf',
                'id' => 3,
                'identity' => 'no-file.pdf',
                'licence' => 'AJLPRA_sRiv4DfM_1648634232.pdf',
                'photo' => 'Screenshot Capture - 2022-03-28 - 17-44-58_1648634232.png',
                'proof_add_one' => 'Hauwa_1648634232.docx',
                'proof_add_two' => 'Hauwa_1648634232.docx',
                'refone' => 'JAAS.MS.ID.000172_1648634232.pdf',
                'reftwo' => 'JAAS.MS.ID.000172_1648634232.pdf',
                'updated_at' => '2022-03-30 09:57:12',
            ),
        ));
        
        
    }
}