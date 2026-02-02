<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Arr;
use App\Models\ServicePack;

class ServicePackSeeder extends Seeder
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
                "title" => "Pack Standard",
                "subtitle" => "Modification complète",
                "description" => "Transfert de siège social avec tous les documents nécessaires",
                "price" => 2399,
                "advantages" => [
                    ["name" => "Validation et transmission du dossier", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "disadvantage"],
                    ["name" => "Traitement prioritaire", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 2,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 34,
                "service_id" => 23,
                "slug" => "Succursale\n",
                "title" => "Standard",
                "subtitle" => "standard",
                "description" => null,
                "price" => 4500,
                "advantages" => [
                    ["name" => "Honoraires du cabinet", "type" => "advantage"],
                    ["name" => "Frais Administratifs et débours de création", "type" => "advantage"],
                    ["name" => "Assistance", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 35,
                "service_id" => 19,
                "slug" => "standard",
                "title" => "Filiale Pro",
                "subtitle" => null,
                "description" => null,
                "price" => 13800,
                "advantages" => [
                    ["name" => "fast", "type" => "advantage"],
                    ["name" => "hello", "type" => "advantage"],
                    ["name" => "avantage", "type" => "advantage"]
                ],
                "is_recommended" => false,
                "position" => 0,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-12-23T17:15:17.000000Z",
                "updated_at" => "2025-12-23T17:15:17.000000Z"
            ],
            [
                "id" => 1,
                "service_id" => 1,
                "slug" => "standard",
                "title" => "Pack Standard",
                "subtitle" => "Création SARL complète",
                "description" => "Création de votre SARL avec tous les documents nécessaires",
                "price" => 4999,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "disadvantage"],
                    ["name" => "Traitement prioritaire", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 1,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 2,
                "service_id" => 1,
                "slug" => "premium",
                "title" => "Pack Premium",
                "subtitle" => "Création SARL avec assistance complète",
                "description" => "Création de votre SARL avec assistance téléphonique et relecture par nos experts",
                "price" => 5599,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation en 24h", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "advantage"],
                    ["name" => "Traitement prioritaire", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 2,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 3,
                "service_id" => 2,
                "slug" => "standard",
                "title" => "Pack Standard",
                "subtitle" => "Création SARLAU complète",
                "description" => "Création de votre SARLAU avec tous les documents nécessaires",
                "price" => 4999,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "disadvantage"],
                    ["name" => "Traitement prioritaire", "type" => "disadvantage"]
                ],
                "is_recommended" => false,
                "position" => 1,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 4,
                "service_id" => 2,
                "slug" => "premium",
                "title" => "Pack Premium",
                "subtitle" => "Création SARLAU avec assistance complète",
                "description" => "Création de votre SARLAU avec assistance téléphonique et relecture par nos experts",
                "price" => 5599,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation en 24h", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "advantage"],
                    ["name" => "Traitement prioritaire", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 2,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-01T12:23:30.000000Z",
                "updated_at" => "2025-09-01T12:23:30.000000Z"
            ],
            [
                "id" => 30,
                "service_id" => 21,
                "slug" => "standard",
                "title" => "Pack Standard SA",
                "subtitle" => "standard",
                "description" => null,
                "price" => 13800,
                "advantages" => [
                    ["name" => "test 1", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-10-16T17:06:34.000000Z",
                "updated_at" => "2025-10-16T17:06:34.000000Z"
            ],
            [
                "id" => 8,
                "service_id" => 6,
                "slug" => "Premiem",
                "title" => "Pack Premium",
                "subtitle" => "Dépôt de Marque",
                "description" => "depot de marque",
                "price" => 3000,
                "advantages" => [
                    ["name" => "Honoraires du cabinet", "type" => "advantage"],
                    ["name" => "Frais Administratifs et débours", "type" => "advantage"],
                    ["name" => "Assistance", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 0,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-09-08T13:18:04.000000Z",
                "updated_at" => "2025-09-08T13:18:04.000000Z"
            ],
            [
                "id" => 28,
                "service_id" => 4,
                "slug" => "premium",
                "title" => "Pack Premium",
                "subtitle" => "Modification complète Express",
                "description" => null,
                "price" => 2999,
                "advantages" => [
                    ["name" => "Validation et transmission du dossier", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "advantage"],
                    ["name" => "Traitement prioritaire", "type" => "advantage"]
                ],
                "is_recommended" => true,
                "position" => 3,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => "2025-10-10T00:00:00.000000Z",
                "updated_at" => "2025-10-10T00:00:00.000000Z"
            ],
            [
                "id" => 32,
                "service_id" => 22,
                "slug" => "premium",
                "title" => "Pack Premium",
                "subtitle" => "Création SAS avec assistance complète",
                "description" => "Création de votre SAS avec assistance téléphonique et relecture par nos experts",
                "price" => 5599,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation en 24h", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "advantage"],
                    ["name" => "Traitement prioritaire", "type" => "advantage"]
                ],
                "is_recommended" => false,
                "position" => 2,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 33,
                "service_id" => 22,
                "slug" => "standard",
                "title" => "Pack Standard",
                "subtitle" => "Création SAS complète",
                "description" => "Création de votre SAS avec tous les documents nécessaires",
                "price" => 4999,
                "advantages" => [
                    ["name" => "Traitement et transmission du dossier pour légalisation", "type" => "advantage"],
                    ["name" => "Documents sur-mesure", "type" => "advantage"],
                    ["name" => "Dépôt du dossier", "type" => "advantage"],
                    ["name" => "Conseils juridiques illimités", "type" => "disadvantage"],
                    ["name" => "Traitement prioritaire", "type" => "disadvantage"]
                ],
                "is_recommended" => true,
                "position" => 1,
                "enabled" => true,
                "locale" => "fr", // ← added
                "created_at" => null,
                "updated_at" => null
            ]
        ];

        foreach ($packs as $data) {
            // Clean slug (remove newlines like in "Succursale\n")
            $data['slug'] = trim($data['slug']);

            ServicePack::updateOrCreate(
                ['id' => $data['id']],
                Arr::except($data, ['id'])
            );
        }
    }
}
