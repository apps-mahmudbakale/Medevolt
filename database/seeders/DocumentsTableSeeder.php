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
                'id' => 1,
                'fullname' => 'Shamsuddeen Aliyu',
                'cv' => 'INTERNAL MEMO December Get Togather_1642004992.pdf',
                'guarantor_form' => 'INTERNAL MEMO -Request to Pay for AMAC Fumigation._1642004992.pdf',
                'refone' => 'INTERNAL MEMO December Get Togather_1642004992.pdf',
            'reftwo' => 'INTERNAL MEMO- IMPREST RIMBURESMENT (1) (1)_1642004992.pdf',
                'degree' => 'INTERNAL MEMO -Request to pay for HSG procedure_1642004992.pdf',
                'licence' => 'INTERNAL MEMO -Request to Pay for Covid Test Investigation_1642004992.pdf',
                'drivers_licence' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'identity' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'photo' => 'INTERNAL MEMO -Request to pay for HSG procedure_1642004992.pdf',
                'proof_add_one' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'proof_add_two' => 'INTERNAL MEMO -Request to refill our fire extinguishers_1642004992.pdf',
                'created_at' => '2022-01-12 10:29:52',
                'updated_at' => '2022-01-12 10:29:52',
            ),
        ));
        
        
    }
}