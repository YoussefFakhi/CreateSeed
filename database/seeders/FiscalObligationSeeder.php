<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiscalObligationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        DB::table('fiscal_obligations')->delete(); // Optional: clear before seeding

        DB::table('fiscal_obligations')->insert([
            [
                'id' => 1,
                'code' => 'tva_mensuelle',
                'category' => 'TVA',
                'label' => 'TVA – régime mensuel',
                'periodicity' => 'mensuelle',
                'rule_text' => 'Avant la fin du mois suivant',
                'client_text' => 'Déclarer et payer la TVA avant la fin du mois suivant le mois de référence.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 2,
                'code' => 'tva_trimestrielle',
                'category' => 'TVA',
                'label' => 'TVA – régime trimestriel',
                'periodicity' => 'trimestrielle',
                'rule_text' => 'Avant la fin du mois suivant le trimestre',
                'client_text' => 'Déclarer et payer la TVA du trimestre avant la fin du mois suivant le trimestre de référence.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 3,
                'code' => 'ir_salaires',
                'category' => 'IR / Retenue à la source',
                'label' => 'IR sur salaires',
                'periodicity' => 'mensuelle',
                'rule_text' => 'Avant la fin de chaque mois',
                'client_text' => 'Déclarer et payer l\'IR retenu sur salaires avant la fin de chaque mois.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 4,
                'code' => 'ir_ras_divers',
                'category' => 'IR / Retenue à la source',
                'label' => 'Retenues à la source (honoraires, loyers…)',
                'periodicity' => 'mensuelle',
                'rule_text' => 'Avant la fin de chaque mois',
                'client_text' => 'Déclarer et payer les retenues à la source sur honoraires, loyers, etc. avant la fin de chaque mois.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 5,
                'code' => 'droits_de_timbre',
                'category' => 'Droits de timbre',
                'label' => 'Droits de timbre',
                'periodicity' => 'mensuelle',
                'rule_text' => 'Avant la fin de chaque mois',
                'client_text' => 'Verser les droits de timbre collectés avant la fin de chaque mois.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 6,
                'code' => 'cnss_declaration',
                'category' => 'CNSS',
                'label' => 'Déclaration et paiement des cotisations CNSS (salariés)',
                'periodicity' => 'mensuelle',
                'rule_text' => 'Avant le 10 du mois suivant',
                'client_text' => 'Déclarer et payer les cotisations sociales CNSS avant le 10 du mois suivant.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 7,
                'code' => 'etat_9421',
                'category' => 'Déclarations salariales',
                'label' => 'Déclaration des traitements et des salaires (ETAT 9421)',
                'periodicity' => 'annuelle',
                'rule_text' => 'Avant la fin février',
                'client_text' => 'Déposer la déclaration annuelle des traitements et salaires (ETAT 9421) avant la fin février.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 8,
                'code' => 'is_acompte',
                'category' => 'IS',
                'label' => 'Acompte provisionnel IS',
                'periodicity' => 'trimestrielle',
                'rule_text' => '31/03 – 30/06 – 30/09 – 31/12',
                'client_text' => 'Payer les acomptes provisionnels de l\'IS aux dates suivantes : 31 mars, 30 juin, 30 septembre et 31 décembre.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 9,
                'code' => 'is_liasse',
                'category' => 'IS',
                'label' => 'Déclaration du résultat IS (liasse fiscale)',
                'periodicity' => 'annuelle',
                'rule_text' => 'Dans les 3 mois suivant la clôture de l\'exercice',
                'client_text' => 'Déposer la liasse fiscale et la déclaration de résultat IS dans les 3 mois suivant la clôture de l\'exercice.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 10,
                'code' => 'is_reliquat',
                'category' => 'IS',
                'label' => 'Paiement du Reliquat IS',
                'periodicity' => 'annuelle',
                'rule_text' => 'Dans les 3 mois suivant la clôture de l\'exercice',
                'client_text' => 'Payer le reliquat (solde) de l\'IS dans les 3 mois suivant la clôture de l\'exercice.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ],
            [
                'id' => 11,
                'code' => 'taxe_professionnelle_declaration',
                'category' => 'Taxe professionnelle',
                'label' => 'Taxe Professionnelle – Déclaration des éléments imposable',
                'periodicity' => 'annuelle',
                'rule_text' => 'Avant le 31 janvier',
                'client_text' => 'Déclarer les éléments imposables de la taxe professionnelle avant le 31 janvier.',
                'is_active' => true,
                'local' => 'Fr',
                'created_at' => '2025-11-27 22:08:06',
                'updated_at' => '2025-11-27 22:08:06'
            ]
        ]);
    }
}
