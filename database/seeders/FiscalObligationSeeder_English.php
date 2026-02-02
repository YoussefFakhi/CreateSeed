<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiscalObligationSeeder_English extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'fiscal_obligations')->delete();

        DB::table('fiscal_obligations')->insert([
            [
                'id' => 1,
                'code' => 'tva_mensuelle',
                'category' => 'VAT',
                'label' => 'VAT – Monthly regime',
                'periodicity' => 'monthly',
                'rule_text' => 'By the end of the following month',
                'client_text' => 'Declare and pay VAT by the end of the month following the reference month.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 2,
                'code' => 'tva_trimestrielle',
                'category' => 'VAT',
                'label' => 'VAT – Quarterly regime',
                'periodicity' => 'quarterly',
                'rule_text' => 'By the end of the month following the quarter',
                'client_text' => 'Declare and pay VAT for the quarter by the end of the month following the reference quarter.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 3,
                'code' => 'ir_salaires',
                'category' => 'IR / Withholding Tax',
                'label' => 'Income Tax on Salaries',
                'periodicity' => 'monthly',
                'rule_text' => 'By the end of each month',
                'client_text' => 'Declare and pay income tax withheld on salaries by the end of each month.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 4,
                'code' => 'ir_ras_divers',
                'category' => 'IR / Withholding Tax',
                'label' => 'Withholding Tax (fees, rent, etc.)',
                'periodicity' => 'monthly',
                'rule_text' => 'By the end of each month',
                'client_text' => 'Declare and pay withholding taxes on fees, rent, etc. by the end of each month.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 5,
                'code' => 'droits_de_timbre',
                'category' => 'Stamp Duties',
                'label' => 'Stamp Duties',
                'periodicity' => 'monthly',
                'rule_text' => 'By the end of each month',
                'client_text' => 'Pay collected stamp duties by the end of each month.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 6,
                'code' => 'cnss_declaration',
                'category' => 'CNSS',
                'label' => 'CNSS Contribution Declaration and Payment (Employees)',
                'periodicity' => 'monthly',
                'rule_text' => 'By the 10th of the following month',
                'client_text' => 'Declare and pay CNSS social contributions by the 10th of the following month.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 7,
                'code' => 'etat_9421',
                'category' => 'Payroll Declarations',
                'label' => 'Annual Salary and Compensation Declaration (Form 9421)',
                'periodicity' => 'annual',
                'rule_text' => 'By end of February',
                'client_text' => 'Submit the annual salary and compensation declaration (Form 9421) by the end of February.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 8,
                'code' => 'is_acompte',
                'category' => 'Corporate Income Tax (CIT)',
                'label' => 'Provisional CIT Installments',
                'periodicity' => 'quarterly',
                'rule_text' => 'March 31 – June 30 – September 30 – December 31',
                'client_text' => 'Pay provisional CIT installments on the following dates: March 31, June 30, September 30, and December 31.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 9,
                'code' => 'is_liasse',
                'category' => 'Corporate Income Tax (CIT)',
                'label' => 'CIT Return (Tax Package)',
                'periodicity' => 'annual',
                'rule_text' => 'Within 3 months following fiscal year-end',
                'client_text' => 'Submit the tax package and CIT return within 3 months following the fiscal year-end.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 10,
                'code' => 'is_reliquat',
                'category' => 'Corporate Income Tax (CIT)',
                'label' => 'CIT Final Balance Payment',
                'periodicity' => 'annual',
                'rule_text' => 'Within 3 months following fiscal year-end',
                'client_text' => 'Pay the final CIT balance within 3 months following the fiscal year-end.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 11,
                'code' => 'taxe_professionnelle_declaration',
                'category' => 'Business Tax',
                'label' => 'Business Tax – Declaration of Taxable Elements',
                'periodicity' => 'annual',
                'rule_text' => 'By January 31',
                'client_text' => 'Declare the taxable elements of business tax by January 31.',
                'is_active' => true,
                'local' => 'en',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ]
        ]);
    }
}
