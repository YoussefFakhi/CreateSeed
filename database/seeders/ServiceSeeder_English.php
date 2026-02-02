<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Arr;

class ServiceSeeder_English extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                "id" => 3,
                "key" => "company.modify.manager_change",
                "title" => "Manager Change",
                "description" => "Modification of a company's manager",
                "base_price" => 99000,
                "sla_days" => 3,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 4,
                "key" => "modification",
                "title" => "Modification",
                "description" => null,
                "base_price" => 1,
                "sla_days" => 30,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-10-05T22:41:59.000000Z"
            ],
            [
                "id" => 19,
                "key" => "creation_filiale",
                "title" => "Subsidiary Creation",
                "description" => "Subsidiary creation",
                "base_price" => 0,
                "sla_days" => 30,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-10-14T08:46:16.000000Z",
                "updated_at" => "2025-10-14T08:46:16.000000Z"
            ],
            [
                "id" => 21,
                "key" => "creation_s_a",
                "title" => "S.A. Creation",
                "description" => "just testing",
                "base_price" => 0,
                "sla_days" => 30,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-10-17T09:58:44.000000Z",
                "updated_at" => "2025-10-17T09:58:44.000000Z"
            ],
            [
                "id" => 1,
                "key" => "company.sarl.create",
                "title" => "SARL Creation",
                "description" => "Complete incorporation of a Société à Responsabilité Limitée (SARL)",
                "base_price" => 199000,
                "sla_days" => 7,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 2,
                "key" => "company.sarlau.create",
                "title" => "SARLAU Creation",
                "description" => "Complete incorporation of a SARL with Variable Capital (SARLAU)",
                "base_price" => 199000,
                "sla_days" => 7,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 6,
                "key" => "depot.marque",
                "title" => "Trademark Registration",
                "description" => "this service for protecting brand",
                "base_price" => 33,
                "sla_days" => 53,
                "enabled" => true,
                "locale" => "en",
                "created_at" => "2025-09-08T08:57:58.000000Z",
                "updated_at" => "2025-09-08T08:57:58.000000Z"
            ],
            [
                "id" => 22,
                "key" => "company.sas.create",
                "title" => "SAS Creation",
                "description" => "Complete incorporation of a Simplified Joint-Stock Company (SAS)",
                "base_price" => 90000,
                "sla_days" => 7,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 23,
                "key" => "company.succursale.create",
                "title" => "Branch Creation",
                "description" => "Complete BRANCH CREATION",
                "base_price" => 199999,
                "sla_days" => 34,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 24,
                "key" => "accounting.create",
                "title" => "Accounting Setup",
                "description" => "Entrust us with your accounting",
                "base_price" => 1900,
                "sla_days" => 31,
                "enabled" => true,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(
                ['id' => $data['id']],
                Arr::except($data, ['id'])
            );
        }
    }
}
