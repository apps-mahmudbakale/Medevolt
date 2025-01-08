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
            1 => 
            array (
                'id' => 2,
                'fullname' => 'Clients Mahmud Bakale',
                'cv' => 'YBT_1648465308.docx',
                'guarantor_form' => 'laravel_1648465308.pdf',
                'refone' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'reftwo' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'degree' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'licence' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'drivers_licence' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'identity' => 'no-file.pdf',
                'photo' => '__1648465308.jpeg',
                'proof_add_one' => 'JAAS.MS.ID.000172_1648465308.pdf',
                'proof_add_two' => 'AJLPRA_sRiv4DfM_1648465308.pdf',
                'created_at' => '2022-03-28 11:01:48',
                'updated_at' => '2022-03-28 11:01:48',
            ),
            2 => 
            array (
                'id' => 3,
                'fullname' => 'VESE FIDELIS TEZUNGWE',
            'cv' => 'Dr.VESE\'S  CV (1)_compressed_1648806175.pdf',
                'guarantor_form' => 'Guarantor\'s form._compressed_1648806175.pdf',
                'refone' => 'Referee 2_compressed_1648806175.pdf',
                'reftwo' => 'Referee 2_compressed_1648806175.pdf',
                'degree' => 'University certificate_compressed_1648806175.pdf',
            'licence' => 'doc (1) (2)_compressed_1648806175.pdf',
                'drivers_licence' => 'My ID_compressed_1648806175.pdf',
                'identity' => 'My ID 2_1_1648806175.jpg',
                'photo' => 'My Credentials_1_1648806175.jpg',
                'proof_add_one' => 'Insurance _compressed_1648806175.pdf',
            'proof_add_two' => 'doc (1) (3)_compressed_1648806175.pdf',
                'created_at' => '2022-04-01 09:42:55',
                'updated_at' => '2022-04-01 09:42:55',
            ),
        ));
        
        
    }
}