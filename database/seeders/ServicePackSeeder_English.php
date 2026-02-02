<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServicePack;
use Illuminate\Support\Arr;

class ServicePackSeeder_English extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packs = [
            [
                "id" => 6,
                "service_id" => 4,
                "slug" => "standard",
                "title" => "Standard Pack",
                "subtitle" => "Complete Modification",
                "description" => "Registered office transfer with all required documents",
                "price" => 2399,
                "advantages" => [
                    ["name" => "File validation and submission", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "disadvantage"],
                    ["name" => "Priority processing", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 2,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 34,
                "service_id" => 23,
                "slug" => "branch",
                "title" => "Standard",
                "subtitle" => "standard",
                "description" => null,
                "price" => 4500,
                "advantages" => [
                    ["name" => "Law firm fees", "type" => "advantage"],
                    ["name" => "Administrative fees and setup costs", "type" => "advantage"],
                    ["name" => "Assistance", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 35,
                "service_id" => 19,
                "slug" => "standard",
                "title" => "Pro Subsidiary",
                "subtitle" => null,
                "description" => null,
                "price" => 13800,
                "advantages" => [
                    ["name" => "fast", "type" => "advantage"],
                    ["name" => "hello", "type" => "advantage"],
                    ["name" => "advantage", "type" => "advantage"]
                ],
                "is_recommended" => false,
                "position" => 0,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-12-23T17:15:17.000000Z",
                "updated_at" => "2025-12-23T17:15:17.000000Z"
            ],
            [
                "id" => 1,
                "service_id" => 1,
                "slug" => "standard",
                "title" => "Standard Pack",
                "subtitle" => "Complete SARL Incorporation",
                "description" => "Create your SARL with all required documents",
                "price" => 4999,
                "advantages" => [
                    ["name" => "File processing and submission for legalization", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "disadvantage"],
                    ["name" => "Priority processing", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 1,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 2,
                "service_id" => 1,
                "slug" => "premium",
                "title" => "Premium Pack",
                "subtitle" => "SARL Incorporation with Full Support",
                "description" => "Create your SARL with phone assistance and expert document review",
                "price" => 5599,
                "advantages" => [
                    ["name" => "File processing and submission for legalization within 24h", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "advantage"],
                    ["name" => "Priority processing", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 2,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 3,
                "service_id" => 2,
                "slug" => "standard",
                "title" => "Standard Pack",
                "subtitle" => "Complete SARLAU Incorporation",
                "description" => "Create your SARLAU with all required documents",
                "price" => 4999,
                "advantages" => [
                    ["name" => "File processing and submission for legalization", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "disadvantage"],
                    ["name" => "Priority processing", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 1,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 4,
                "service_id" => 2,
                "slug" => "premium",
                "title" => "Premium Pack",
                "subtitle" => "SARLAU Incorporation with Full Support",
                "description" => "Create your SARLAU with phone assistance and expert document review",
                "price" => 5599,
                "advantages" => [
                    ["name" => "File processing and submission for legalization within 24h", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "advantage"],
                    ["name" => "Priority processing", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 2,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 30,
                "service_id" => 21,
                "slug" => "standard",
                "title" => "Standard SA Pack",
                "subtitle" => "standard",
                "description" => null,
                "price" => 13800,
                "advantages" => [
                    ["name" => "test 1", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-10-16T17:06:34.000000Z",
                "updated_at" => "2025-10-16T17:06:34.000000Z"
            ],
            [
                "id" => 8,
                "service_id" => 6,
                "slug" => "premium",
                "title" => "Premium Pack",
                "subtitle" => "Trademark Registration",
                "description" => "trademark registration",
                "price" => 3000,
                "advantages" => [
                    ["name" => "Law firm fees", "type" => "advantage"],
                    ["name" => "Administrative and filing fees", "type" => "advantage"],
                    ["name" => "Assistance", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-08T13:18:04.000000Z",
                "updated_at" => "2025-09-08T13:18:04.000000Z"
            ],
            [
                "id" => 28,
                "service_id" => 4,
                "slug" => "premium",
                "title" => "Premium Pack",
                "subtitle" => "Express Complete Modification",
                "description" => null,
                "price" => 2999,
                "advantages" => [
                    ["name" => "File validation and submission", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "advantage"],
                    ["name" => "Priority processing", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 3,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-10-10T00:00:00.000000Z",
                "updated_at" => "2025-10-10T00:00:00.000000Z"
            ],
            [
                "id" => 32,
                "service_id" => 22,
                "slug" => "premium",
                "title" => "Premium Pack",
                "subtitle" => "SAS Incorporation with Full Support",
                "description" => "Create your SAS with phone assistance and expert document review",
                "price" => 5599,
                "advantages" => [
                    ["name" => "File processing and submission for legalization within 24h", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "advantage"],
                    ["name" => "Priority processing", "type" => "advantage"]
                ],
                "is_recommended" => false,
                "position" => 2,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 33,
                "service_id" => 22,
                "slug" => "standard",
                "title" => "Standard Pack",
                "subtitle" => "Complete SAS Incorporation",
                "description" => "Create your SAS with all required documents",
                "price" => 4999,
                "advantages" => [
                    ["name" => "File processing and submission for legalization", "type" => "advantage"],
                    ["name" => "Customized documents", "type" => "advantage"],
                    ["name" => "File filing", "type" => "advantage"],
                    ["name" => "Unlimited legal advice", "type" => "disadvantage"],
                    ["name" => "Priority processing", "type" => "disadvantage"]
                ],
                "is_recommended" => true,
                "position" => 1,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        foreach ($packs as $data) {
            // Clean slug (remove newlines and fix typo "Premiem" → "premium")
            $data['slug'] = trim(str_replace("Premiem", "premium", $data['slug']));

            ServicePack::updateOrCreate(
                ['id' => $data['id']],
                Arr::except($data, ['id'])
            );
        }    }
}
