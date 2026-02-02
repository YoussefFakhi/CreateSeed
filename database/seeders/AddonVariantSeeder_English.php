<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\AddonVariant;

class AddonVariantSeeder_English extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variants = [
            [
                "id" => 1,
                "addon_id" => 7,
                "label" => "Casablanca",
                "option_key" => "casablanca",
                "price" => "1500.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => [],
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ],
            [
                "id" => 2,
                "addon_id" => 7,
                "label" => "Marrakech", // Standard English spelling
                "option_key" => "marakech",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => [],
                "created_at" => "2025-10-06T14:49:04.000000Z",
                "updated_at" => "2025-10-06T14:49:04.000000Z"
            ],
            [
                "id" => 3,
                "addon_id" => 7,
                "label" => "Agadir",
                "option_key" => "agadir",
                "price" => "3300.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => [],
                "created_at" => "2025-10-14T13:12:21.000000Z",
                "updated_at" => "2025-10-14T13:12:21.000000Z"
            ],
            [
                "id" => 4,
                "addon_id" => 7,
                "label" => "Rabat",
                "option_key" => "rabat",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => null,
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ],
            [
                "id" => 5,
                "addon_id" => 7,
                "label" => "Fes", // Also spelled "Fez" in English, but "Fes" is widely accepted
                "option_key" => "fes",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => null,
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ],
            [
                "id" => 6,
                "addon_id" => 7,
                "label" => "Meknes",
                "option_key" => "meknes",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => null,
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ],
            [
                "id" => 7,
                "addon_id" => 7,
                "label" => "Tangier", // Standard English spelling
                "option_key" => "tanger",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => null,
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ],
            [
                "id" => 8,
                "addon_id" => 7,
                "label" => "Beni Mellal", // Standard English spelling (no accent)
                "option_key" => "beni_mellal",
                "price" => "2000.00",
                "is_active" => true,
                "locale" => "en",
                "metadata" => null,
                "created_at" => "2025-10-06T01:02:01.000000Z",
                "updated_at" => "2025-10-06T01:02:01.000000Z"
            ]
        ];

        foreach ($variants as $data) {
            if (is_array($data['metadata']) && empty($data['metadata'])) {
                $data['metadata'] = null;
            }

            AddonVariant::updateOrCreate(
                ['id' => $data['id']],
                Arr::except($data, ['id'])
            );
        }
    }
}
