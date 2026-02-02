<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Addon;

class AddonSeeder_English extends Seeder
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
                "title" => "Capital Increase",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "augmentation_capital_v1",
                "has_form" => true,
                "description" => "Procedure for increasing the company's share capital",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 3,
                "key" => "modification_gerance",
                "title" => "Management Change",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "modification_gerance_v1",
                "has_form" => true,
                "description" => "Procedure for changing the company's management",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 4,
                "key" => "modification_activite",
                "title" => "Activity Modification",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "modification_activite_v1",
                "has_form" => true,
                "description" => "Procedure for modifying the company's business purpose",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 7,
                "key" => "domiciliation",
                "title" => "Registered Office",
                "service_id" => 1,
                "price" => "1.00",
                "price_mode" => "monthly",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => false,
                "locale" => "en",
                "created_at" => "2025-10-06T00:29:51.000000Z",
                "updated_at" => "2025-10-06T00:29:51.000000Z"
            ],
            [
                "id" => 6,
                "key" => "changement_denomination",
                "title" => "Company Name Change",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "company_name_modification_v1",
                "has_form" => true,
                "description" => "Procedure for changing the company's legal name",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 2,
                "key" => "cession_parts",
                "title" => "Share Transfer",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "shares_transfer_v1",
                "has_form" => true,
                "description" => "Procedure for transferring shares between shareholders",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 5,
                "key" => "transfer_siege",
                "title" => "Registered Office Transfer",
                "service_id" => 4,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "transfert_siege_v1",
                "has_form" => true,
                "description" => "Procedure for transferring the company's registered office",
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-05T23:40:05.000000Z",
                "updated_at" => "2025-10-05T23:40:05.000000Z"
            ],
            [
                "id" => 8,
                "key" => "transfer_to_another_city",
                "title" => "Transfer registered office to another city",
                "service_id" => null,
                "price" => "2000.00",
                "price_mode" => "one_off",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-20T17:35:09.000000Z",
                "updated_at" => "2025-10-20T17:35:09.000000Z"
            ],
            [
                "id" => 9,
                "key" => "brand_activity",
                "title" => "Additional Class",
                "service_id" => 6,
                "price" => "250.00",
                "price_mode" => "one_off",
                "form_key" => null,
                "has_form" => false,
                "description" => null,
                "is_active" => true,
                "locale" => "en",
                "created_at" => "2025-10-21T20:28:09.000000Z",
                "updated_at" => "2025-10-21T20:28:09.000000Z"
            ],
            [
                "id" => 10,
                "key" => "address_succursale",
                "title" => "Branch address not in the same city",
                "service_id" => 23,
                "price" => "1000.00",
                "price_mode" => "one_off",
                "form_key" => "address_succursale_v1",
                "has_form" => false,
                "description" => "Branch address not located in the same city as the head office",
                "is_active" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        foreach( $addons as $data){
            Addon::updateOrCreate(
                    ['id'=> $data['id']],
                    Arr::except($data, ['id'])
            );
        }
    }
}
