<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Addon;

class AddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $addons = [
            [
                "id" => 1,
                "key" => "augmentation_capital",
                "title" => "Augmentation du capital",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "augmentation_capital_v1",
                "has_form" => true,
                "description" => "Procédure d'augmentation du capital social de la société",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 3,
                "key" => "modification_gerance",
                "title" => "Modification de gérance",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "modification_gerance_v1",
                "has_form" => true,
                "description" => "Procédure de modification de la gérance de la société",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 4,
                "key" => "modification_activite",
                "title" => "Modification de l'activité",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "modification_activite_v1",
                "has_form" => true,
                "description" => "Procédure de modification de l'objet social de la société",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 7,
                "key" => "domiciliation",
                "title" => "Domiciliation",
                "service_id" => 1,
                "price" => "1.00",
                "price_mode" => "monthly",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => false,
                "created_at" => "2025-10-06T00:29:51.000000Z",
                "updated_at" => "2025-10-06T00:29:51.000000Z"
            ],
            [
                "id" => 6,
                "key" => "changement_denomination",
                "title" => "Changement de dénomination sociale",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "company_name_modification_v1",
                "has_form" => true,
                "description" => "Procédure de changement de dénomination sociale de la société",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 2,
                "key" => "cession_parts",
                "title" => "Cession des parts",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "shares_transfer_v1",
                "has_form" => true,
                "description" => "Procédure de cession de parts sociales entre associés",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 5,
                "key" => "transfer_siege",
                "title" => "Transfert de siège social",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "transfert_siege_v1",
                "has_form" => true,
                "description" => "Procédure de transfert du siège social de la société",
                "is_active" => true,
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 8,
                "key" => "transfer_to_another_city",
                "title" => "transfert du siège social dans une autre ville",
                "service_id" => null,
                "price" => "2000.00",
                "price_mode" => "one_off",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => true,
                "created_at" => "2025-10-20T17:35:09.000000Z",
                "updated_at" => "2025-10-20T17:35:09.000000Z"
            ],
            [
                "id" => 9,
                "key" => "brand_activity",
                "title" => "Classe supplémentaire",
                "service_id" => 6,
                "price" => "250.00",
                "price_mode" => "one_off",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => true,
                "created_at" => "2025-10-21T20:28:09.000000Z",
                "updated_at" => "2025-10-21T20:28:09.000000Z"
            ],
            [
                "id" => 10,
                "key" => "address_succursale",
                "title" => "l'adresse de succursale et ne pas dant la meme ville",
                "service_id" => 23,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "address_succursale_v1",
                "has_form" => false,
                "description" => "l'adresse de succursale et ne pas dant la meme ville",
                "is_active" => true,
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        foreach ($addons as $data) {
            Addon::updateOrCreate(
                ['id' => $data['id']],
                Arr::except($data, ['id'])
            );
        }
    }
}
