<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSchemaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('form_schemas')->delete();

        DB::table('form_schemas')->insert([
            [
                "id" => 7,
                "key" => "managers_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["managers"],
                    "properties" => [
                        "managers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["full_name", "national_id", "powers", "address"],
                                "properties" => [
                                    "powers" => ["enum" => ["all", "limited"], "type" => "string", "title" => "Pouvoirs"],
                                    "address" => ["type" => "string", "title" => "Adresse"],
                                    "full_name" => ["type" => "string", "title" => "Nom complet"],
                                    "national_id" => ["type" => "string", "title" => "CIN"]
                                ]
                            ],
                            "title" => "Gérants"
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "managers" => [
                        "items" => [
                            "powers" => ["ui:widget" => "select"],
                            "address" => ["ui:widget" => "textarea"],
                            "full_name" => ["ui:widget" => "text"],
                            "national_id" => ["ui:widget" => "text"]
                        ],
                        "ui:options" => ["addable" => true, "removable" => true]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 9,
                "key" => "upload_docs_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["id_scan", "seat_proof"],
                    "properties" => [
                        "id_scan" => ["type" => "string", "title" => "Scan CIN"],
                        "seat_proof" => ["type" => "string", "title" => "Justificatif de siège"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "id_scan" => ["ui:widget" => "file"],
                    "seat_proof" => ["ui:widget" => "file"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 11,
                "key" => "new_manager_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["full_name", "national_id", "powers", "address"],
                    "properties" => [
                        "powers" => ["enum" => ["all", "limited"], "type" => "string", "title" => "Pouvoirs"],
                        "address" => ["type" => "string", "title" => "Adresse"],
                        "full_name" => ["type" => "string", "title" => "Nom complet"],
                        "national_id" => ["type" => "string", "title" => "CIN"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "powers" => ["ui:widget" => "select"],
                    "address" => ["ui:widget" => "textarea"],
                    "full_name" => ["ui:widget" => "text"],
                    "national_id" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 12,
                "key" => "new_address_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["new_address", "proof_document"],
                    "properties" => [
                        "new_address" => ["type" => "string", "title" => "Nouvelle adresse"],
                        "proof_document" => ["type" => "string", "title" => "Justificatif"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "new_address" => ["ui:widget" => "textarea"],
                    "proof_document" => ["ui:widget" => "file"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 30,
                "key" => "changement_denomination_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Changement de dénomination sociale",
                    "required" => ["name_change"],
                    "properties" => [
                        "name_change" => [
                            "type" => "object",
                            "title" => "Détails du changement",
                            "required" => ["current_name", "new_name"],
                            "properties" => [
                                "proposed_name" => ["type" => "string", "title" => "Choix 1"],
                                "proposed_name_2" => ["type" => "string", "title" => "Choix 2"],
                                "proposed_name_3" => ["type" => "string", "title" => "Choix 3"]
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 10,
                "key" => "company_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Avez-vous créé votre société avec Legalservices ?",
                    "required" => [],
                    "properties" => [
                        "name" => ["type" => "string", "title" => "Nom de la société"],
                        "with_us" => ["type" => "boolean", "title" => "Avez-vous créé votre société avec Legalservices ?"],
                        "rc_document_id" => ["type" => "number", "title" => "Numéro RC"],
                        "contrat_de_bail" => ["type" => "number", "title" => "Contrat de bail"],
                        "statuts_document_id" => ["type" => "number", "title" => "Statuts"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "rc" => ["ui:widget" => "text"],
                    "ice" => ["ui:widget" => "text"],
                    "current_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 28,
                "key" => "modification_activite_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "allOf" => [
                        [
                            "if" => [
                                "properties" => [
                                    "change_type" => ["enum" => ["add", "replace"]]
                                ]
                            ],
                            "then" => [
                                "properties" => [
                                    "activities" => ["minItems" => 1]
                                ]
                            ]
                        ]
                    ],
                    "title" => "Comment modifiez-vous l'activité de la société ?",
                    "required" => ["change_type", "activities"],
                    "properties" => [
                        "activities" => [
                            "type" => "array",
                            "items" => ["type" => "string", "title" => "Activité"],
                            "title" => "Nouvelles activités",
                            "minItems" => 1
                        ],
                        "change_type" => [
                            "enum" => ["add", "replace"],
                            "type" => "string",
                            "title" => "Type de modification",
                            "enumNames" => ["Ajout d’activité(s)", "Changement complet"]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 29,
                "key" => "transfert_siege_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Transfert de siège social",
                    "required" => [],
                    "properties" => [
                        "hint" => ["type" => "hint", "title" => "Si le transfert de siège se fait d'une autre ville, 2000dh seront ajouté au devis"],
                        "same_city" => ["enum" => ["yes", "no"], "type" => "string", "title" => "L'adresse de votre nouveau siège social, est-elle située dans la même ville que l'actuel ?", "enumNames" => ["Oui", "No"]],
                        "new_address" => ["type" => "string", "title" => "Quelle sera la nouvelle adresse de la société ?"],
                        "current_address" => ["type" => "string", "title" => "Quelle est l'adresse actuelle de la société ? "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["current_address", "hint", "same_city", "new_adress"],
                    "same_city" => ["ui:widget" => "radio"],
                    "new_address" => ["ui:widget" => "text"],
                    "current_address" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 41,
                "key" => "augmentation_capital_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Augmentation de capital",
                    "required" => [],
                    "properties" => [
                        "new_capital" => ["type" => "number", "title" => "Votre nouveau capital social sera de"],
                        "capital_added" => ["type" => "number", "title" => "De combien sauhaitez-vous augmenter votre capital ?"],
                        "current_capital" => ["type" => "number", "title" => "Quel est votre capital actuel ?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["current_capital", "capital_added", "new_capital"],
                    "new_capital" => ["ui:widget" => "number"],
                    "capital_added" => ["ui:widget" => "number"],
                    "current_capital" => ["ui:widget" => "number"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 23,
                "key" => "sarl_creation_form",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["company_name", "capital", "address", "activity"],
                    "properties" => [
                        "address" => ["type" => "string", "title" => "Adresse du siège"],
                        "capital" => ["type" => "number", "title" => "Capital social"],
                        "activity" => ["type" => "string", "title" => "Activité principale"],
                        "company_name" => ["type" => "string", "title" => "Nom de la société"],
                        "shareholders" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "properties" => [
                                    "name" => ["type" => "string"],
                                    "shares" => ["type" => "number"]
                                ]
                            ],
                            "title" => "Associés"
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "address" => ["ui:widget" => "textarea"],
                    "capital" => ["ui:widget" => "number"],
                    "company_name" => ["ui:placeholder" => "Ex: Ma Société SARL"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-14 09:42:17",
                "updated_at" => "2025-09-14 09:42:17"
            ],
            [
                "id" => 3,
                "key" => "company_activity_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Connaissez-vous déjà l'activité de votre société ?",
                    "required" => ["activity"],
                    "properties" => [
                        "activity" => ["type" => "string", "title" => "Activité"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "activity" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-12-19 00:09:12"
            ],
            [
                "id" => 24,
                "key" => "sarlau_creation_form",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => ["company_name", "capital", "address", "activity", "manager_name"],
                    "properties" => [
                        "address" => ["type" => "string", "title" => "Adresse du siège"],
                        "capital" => ["type" => "number", "title" => "Capital social"],
                        "activity" => ["type" => "string", "title" => "Activité principale"],
                        "company_name" => ["type" => "string", "title" => "Nom de la société"],
                        "manager_name" => ["type" => "string", "title" => "Nom du gérant"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "address" => ["ui:widget" => "textarea"],
                    "capital" => ["ui:widget" => "number"],
                    "company_name" => ["ui:placeholder" => "Ex: Ma Société SARLAU"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-14 09:42:17",
                "updated_at" => "2025-09-14 09:42:17"
            ],
            [
                "id" => 1,
                "key" => "client_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "C'est parti ! Qui effectue la démarche sur Legalservices ?",
                    "required" => ["full_name", "phone", "email"],
                    "properties" => [
                        "email" => ["type" => "email", "title" => "Email"],
                        "phone" => ["type" => "string", "title" => "Téléphone"],
                        "full_name" => ["type" => "string", "title" => "Nom complet"]
                    ],
                    "description" => "Ces informations nous permettront de vous assister au cours de votre création, et seront nécessaires pour constituer votre dossier."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "cin" => ["ui:widget" => "text"],
                    "email" => ["ui:widget" => "email"],
                    "phone" => ["ui:widget" => "text"],
                    "full_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-24 21:05:35"
            ],
            [
                "id" => 6,
                "key" => "capital_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Capital social",
                    "required" => ["capital"],
                    "properties" => [
                        "capital" => [
                            "type" => "object",
                            "title" => "Quel est le capital total de la société ?",
                            "required" => ["amount", "type", "allocations"],
                            "properties" => [
                                "type" => ["enum" => ["cash", "in_kind", "mixed"], "type" => "string", "title" => "Type de capital", "default" => "cash", "enumNames" => ["Apport en numéraire", "Apport en nature", "Mixte"]],
                                "amount" => ["type" => "number", "title" => "Montant total (MAD)", "minimum" => 0],
                                "allocations" => [
                                    "type" => "array",
                                    "items" => [
                                        "type" => "object",
                                        "required" => ["shareholder_id", "percent"],
                                        "properties" => [
                                            "percent" => ["type" => "number", "title" => "Pourcentage", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01],
                                            "shareholder_id" => ["type" => "number", "title" => "Associé (ID)"]
                                        ]
                                    ],
                                    "title" => "Répartition entre associés (doit totaliser 100%)",
                                    "minItems" => 1,
                                    "description" => "Astuce: la somme des pourcentages doit être exactement 100%."
                                ]
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "capital" => ["ui:widget" => "number"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 4,
                "key" => "shareholders_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "allOf" => [
                        [
                            "if" => [
                                "properties" => [
                                    "is_user_shareholder" => ["const" => true]
                                ]
                            ],
                            "then" => [
                                "required" => ["shareholders"],
                                "properties" => []
                            ]
                        ]
                    ],
                    "required" => ["is_user_shareholder", "shareholders"],
                    "properties" => [
                        "shareholders" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "id_type", "shares"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Téléphone"],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "Type de pièce", "enumNames" => ["Carte d'identité National", "Passport", "Carte de séjour"]],
                                    "is_self" => ["type" => "boolean", "title" => "C'est vous", "default" => false],
                                    "id_number" => ["type" => "string", "title" => "Numéro de pièce"],
                                    "last_name" => ["type" => "string", "title" => "Nom"],
                                    "first_name" => ["type" => "string", "title" => "Prénom"],
                                    "id_document" => ["type" => "number", "title" => "Justificatif d'identité "]
                                ]
                            ],
                            "title" => "Associés",
                            "minItems" => 1
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Êtes-vous l'un des associés ?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "shareholders" => [
                        "items" => [
                            "shares" => ["ui:widget" => "number", "ui:options" => ["min" => 1, "step" => 1]],
                            "id_type" => ["ui:widget" => "radio", "ui:options" => ["inline" => true]],
                            "is_self" => ["ui:widget" => "hidden"],
                            "id_number" => ["ui:placeholder" => "N° de la pièce"],
                            "last_name" => ["ui:placeholder" => "Nom"],
                            "first_name" => ["ui:placeholder" => "Prénom"],
                            "is_foreign" => ["ui:widget" => "switch"],
                            "id_document" => ["ui:widget" => "number", "ui:options" => []],
                            "nationality" => ["ui:widget" => "countrySelect"]
                        ],
                        "ui:widget" => "arrayCards",
                        "ui:options" => ["compact" => true, "itemTitle" => "{{first_name}} {{last_name}}", "showIndex" => false, "addButtonText" => "Ajouter un associé"]
                    ],
                    "is_user_shareholder" => ["ui:widget" => "checkbox", "ui:options" => ["inline" => true, "noLabel" => "Non", "yesLabel" => "Oui"]]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-04 21:13:32"
            ],
            [
                "id" => 8,
                "key" => "bank_signatories_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Signataires",
                    "required" => ["signature_mode", "signatories"],
                    "properties" => [
                        "signatories" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "properties" => [
                                    "id" => ["type" => "number", "title" => "ID associé ou gérant"],
                                    "name" => ["type" => "string", "title" => "Nom complet"],
                                    "can_sign" => ["type" => "boolean", "title" => "Peut signer", "default" => false]
                                ]
                            ],
                            "title" => "Signataires autorisés",
                            "description" => "Sélectionnez les associés et gérants autorisés à signer au nom de la société."
                        ],
                        "signature_mode" => ["enum" => ["separate", "joint"], "type" => "string", "title" => "Type de signature", "enumNames" => ["séparée", "conjointe"], "description" => "Choisissez le mode de signature : séparée (la signature d’un seul est suffisante) ou conjointe (la signature de tous les signataires est requise)."]
                    ],
                    "description" => "Qui seront les signataires dans les chèques et ordres de virement et tout autres documents bancaires ?"
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "signatories" => [
                        "items" => [
                            "power" => ["ui:widget" => "select"],
                            "full_name" => ["ui:widget" => "text"]
                        ],
                        "ui:options" => ["addable" => true, "removable" => true]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 38,
                "key" => "domiciliation",
                "json_schema" => json_encode([
                    "type" => "object",
                    "required" => [],
                    "properties" => [
                        "domiciliation" => ["type" => "string", "title" => "Domiciliation"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "address" => ["ui:widget" => "input"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 5,
                "key" => "sole_shareholder_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "allOf" => [
                        [
                            "if" => [
                                "properties" => [
                                    "is_user_shareholder" => ["const" => true]
                                ]
                            ],
                            "then" => [
                                "required" => ["shareholders"]
                            ]
                        ]
                    ],
                    "required" => ["is_user_shareholder", "shareholders"],
                    "properties" => [
                        "shareholder" => [
                            "type" => "object",
                            "title" => "Associé unique",
                            "required" => ["first_name", "last_name", "id_type", "shares"],
                            "properties" => [
                                "phone" => ["type" => "string", "title" => "Téléphone"],
                                "shares" => ["type" => "integer", "title" => "Parts sociales"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "Type de pièce", "enumNames" => ["Carte d'identité Nationale", "Passeport", "Carte de séjour"]],
                                "is_self" => ["type" => "boolean", "title" => "C'est vous", "default" => false],
                                "id_number" => ["type" => "string", "title" => "Numéro de pièce"],
                                "last_name" => ["type" => "string", "title" => "Nom"],
                                "first_name" => ["type" => "string", "title" => "Prénom"],
                                "id_document" => ["type" => "number", "title" => "Justificatif d'identité"]
                            ]
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Êtes-vous l'associé unique?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "shares" => ["ui:widget" => "number"],
                    "full_name" => ["ui:widget" => "text"],
                    "is_foreign" => ["ui:widget" => "checkbox"],
                    "passport_number" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 39,
                "key" => "accounting",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Comptabilité ",
                    "required" => [],
                    "properties" => [
                        "accounting" => ["type" => "string", "title" => "Comptabilité "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "accounting" => ["ui:widget" => "input"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 40,
                "key" => "modification_choices_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Quel(s) type(s) de modification(s) souhaitez-vous apporter à votre société ?",
                    "required" => [],
                    "properties" => [
                        "modification_choices" => [
                            "type" => "array",
                            "items" => ["type" => "string"],
                            "title" => "Choix des modifications",
                            "minItems" => 1
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-09 12:23:33",
                "updated_at" => null
            ],
            [
                "id" => 42,
                "key" => "company_name_modification_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Changement de dénomination sociale",
                    "required" => ["proposed_name"],
                    "properties" => [
                        "proposed_name" => ["type" => "string", "title" => "Choix 1"],
                        "proposed_name_2" => ["type" => "string", "title" => "Choix 2"],
                        "proposed_name_3" => ["type" => "string", "title" => "Choix 3"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "alt_name" => ["ui:widget" => "text"],
                    "proposed_name" => ["ui:widget" => "text"],
                    "proposed_name_2" => ["ui:widget" => "text"],
                    "proposed_name_3" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 26,
                "key" => "shares_transfer_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Cession de parts sociales",
                    "required" => ["reason", "sellers", "buyers"],
                    "properties" => [
                        "buyers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "parts_a_acheter_percent"],
                                "properties" => [
                                    "last_name" => ["type" => "string", "title" => "Nom", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "Prénom", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer"], "title" => "Document (ID)"],
                                    "parts_a_acheter_percent" => ["type" => "number", "title" => "Parts à acheter (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01]
                                ]
                            ],
                            "title" => "Acheteurs",
                            "minItems" => 1
                        ],
                        "reason" => ["enum" => ["new_shareholder", "departure_shareholder", "other"], "type" => "string", "title" => "Pourquoi souhaitez-vous céder des parts de votre société ?", "enumNames" => ["Pour accueillir un nouvel associé", "En raison du départ d'un associé", "Pour d'autres raisons"]],
                        "sellers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "parts_possedees_percent", "parts_a_vendre_percent"],
                                "properties" => [
                                    "last_name" => ["type" => "string", "title" => "Nom", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "Prénom", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer"], "title" => "Document (ID)"],
                                    "parts_a_vendre_percent" => ["type" => "number", "title" => "Parts à vendre (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01],
                                    "parts_possedees_percent" => ["type" => "number", "title" => "Parts possédées (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01]
                                ]
                            ],
                            "title" => "Vendeurs",
                            "minItems" => 1
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "hints" => [
                        "buyers.parts_a_acheter_percent" => "Assurez-vous que le total des achats = total des ventes.",
                        "sellers.parts_a_vendre_percent" => "La somme des pourcentages vendus doit correspondre à la somme des pourcentages achetés."
                    ],
                    "order" => ["reason", "other_reason", "sellers", "buyers"],
                    "rules" => [
                        [
                            "show" => ["other_reason"],
                            "required" => ["other_reason"],
                            "condition" => ["field" => "reason", "value" => "autre", "operator" => "="]
                        ]
                    ],
                    "descriptions" => [
                        "buyers" => "Renseignez chaque acquéreur (acheteur) et le pourcentage qu’il achète.",
                        "sellers" => "Renseignez chaque cédant (vendeur) et le pourcentage qu’il vend."
                    ],
                    "fieldOptions" => [
                        "buyers" => ["inline" => false, "itemTitle" => "Acheteur", "addButtonText" => "Ajouter un acheteur"],
                        "reason" => ["widget" => "select"],
                        "sellers" => ["inline" => false, "itemTitle" => "Vendeur", "addButtonText" => "Ajouter un vendeur"],
                        "other_reason" => ["widget" => "textarea", "placeholder" => "Décrivez la raison de la cession…"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 27,
                "key" => "modification_gerance_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Changement de gérance",
                    "required" => ["change_type"],
                    "properties" => [
                        "change_type" => ["enum" => ["add", "remove", "replace"], "type" => "string", "title" => "Quel changement de gérant souhaitez-vous faire ?", "enumNames" => ["Ajouter un gérant", "Retirer un gérant", "Remplacer un gérant"]],
                        "incoming_managers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "phone", "id_type", "id_number"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Téléphone ", "maxLength" => 20],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_card"], "type" => "string", "title" => "Type de pièce d'identité", "enumNames" => ["Carte d'Identité National", "Passport", "Carte de séjour"]],
                                    "id_number" => ["type" => "string", "title" => "Numéro de la pièce d'identité", "maxLength" => 50],
                                    "last_name" => ["type" => "string", "title" => "Nom", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "Prénom", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer", "null"], "title" => "Document (ID)"]
                                ]
                            ],
                            "title" => "Liste des gérants entrants"
                        ],
                        "outgoing_managers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "phone", "id_type", "id_number"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Téléphone", "maxLength" => 20],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_card"], "type" => "string", "title" => "Type de pièce d'identité", "enumNames" => ["Carte d'Identité National", "Passport", "Carte de séjour"]],
                                    "id_number" => ["type" => "string", "title" => "Numéro de la pièce d'identité", "maxLength" => 50],
                                    "last_name" => ["type" => "string", "title" => "Nom", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "Prénom", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer", "null"], "title" => "Document (ID)"]
                                ]
                            ],
                            "title" => "Liste des gérants sortants"
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "rules" => [
                        ["hide" => ["outgoing_managers"], "show" => ["incoming_managers"], "condition" => ["field" => "change_type", "value" => "add", "operator" => "="]],
                        ["hide" => ["incoming_managers"], "show" => ["outgoing_managers"], "condition" => ["field" => "change_type", "value" => "remove", "operator" => "="]],
                        ["show" => ["incoming_managers", "outgoing_managers"], "condition" => ["field" => "change_type", "value" => "replace", "operator" => "="]]
                    ],
                    "change_type" => ["ui:widget" => "select"],
                    "requiredByRule" => [
                        ["required" => ["incoming_managers"], "condition" => ["field" => "change_type", "value" => "add", "operator" => "="]],
                        ["required" => ["outgoing_managers"], "condition" => ["field" => "change_type", "value" => "remove", "operator" => "="]],
                        ["required" => ["incoming_managers", "outgoing_managers"], "condition" => ["field" => "change_type", "value" => "replace", "operator" => "="]]
                    ],
                    "incoming_managers" => ["ui:options" => ["itemTitle" => "Gérant entrant", "addButtonText" => "Ajouter un gérant entrant"]],
                    "outgoing_managers" => ["ui:options" => ["itemTitle" => "Gérant sortant", "addButtonText" => "Ajouter un gérant sortant"]],
                    "incoming_managers.phone" => ["ui:widget" => "tel", "ui:placeholder" => "+212 6XX XX XX XX"],
                    "outgoing_managers.phone" => ["ui:widget" => "tel", "ui:placeholder" => "+212 6XX XX XX XX"],
                    "incoming_managers.id_type" => ["ui:widget" => "radio"],
                    "outgoing_managers.id_type" => ["ui:widget" => "radio"],
                    "incoming_managers.id_number" => ["ui:widget" => "text"],
                    "incoming_managers.last_name" => ["ui:widget" => "text"],
                    "outgoing_managers.id_number" => ["ui:widget" => "text"],
                    "outgoing_managers.last_name" => ["ui:widget" => "text"],
                    "incoming_managers.first_name" => ["ui:widget" => "text"],
                    "outgoing_managers.first_name" => ["ui:widget" => "text"],
                    "incoming_managers.document_id" => ["ui:widget" => "document"],
                    "outgoing_managers.document_id" => ["ui:widget" => "document"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 43,
                "key" => "subsidiary_shareholders_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Associés (Filiale)",
                    "required" => ["is_user_shareholder", "shareholders"],
                    "properties" => [
                        "shareholders" => [
                            "type" => "array",
                            "items" => [
                                "oneOf" => [
                                    [
                                        "title" => "Personne Physique",
                                        "required" => ["first_name", "last_name", "id_type", "id_number"],
                                        "properties" => ["shareholder_type" => ["const" => "person"]]
                                    ],
                                    [
                                        "allOf" => [
                                            [
                                                "if" => ["properties" => ["subject_company_id" => ["type" => "null"]]],
                                                "then" => ["required" => ["subject_company_name"]]
                                            ]
                                        ],
                                        "title" => "Personne Morale",
                                        "required" => ["subject_company_id"],
                                        "properties" => ["shareholder_type" => ["const" => "company"]]
                                    ]
                                ],
                                "required" => ["shareholder_type", "shares"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Téléphone"],
                                    "shares" => ["type" => "number", "title" => "Parts / Pourcentage"],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "Type de pièce", "enumNames" => ["Carte d'identité Nationale", "Passeport", "Carte de séjour"]],
                                    "is_self" => ["type" => "boolean", "title" => "C'est vous", "default" => false],
                                    "id_number" => ["type" => "string", "title" => "Numéro de pièce"],
                                    "last_name" => ["type" => "string", "title" => "Nom"],
                                    "first_name" => ["type" => "string", "title" => "Prénom"],
                                    "is_foreign" => ["type" => "boolean", "title" => "Étranger", "default" => false],
                                    "id_document" => ["type" => "number", "title" => "Justificatif d'identité"],
                                    "nationality" => ["type" => "string", "title" => "Nationalité", "default" => "MA"],
                                    "shareholder_type" => ["enum" => ["person", "company"], "type" => "string", "title" => "Type d'associé", "enumNames" => ["Personne Physique", "Personne Morale"]],
                                    "subject_company_id" => ["type" => "number", "title" => "Société (existante dans la plateforme)", "nullable" => true],
                                    "subject_company_rc" => ["type" => "string", "title" => "RC (si externe)", "nullable" => true],
                                    "subject_company_ice" => ["type" => "string", "title" => "ICE (si externe)", "nullable" => true],
                                    "subject_company_name" => ["type" => "string", "title" => "Raison sociale (si externe)", "nullable" => true],
                                    "representative_first_name" => ["type" => "string", "title" => "Prénom du représentant", "nullable" => true]
                                ]
                            ],
                            "title" => "Associés",
                            "minItems" => 1
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Êtes-vous l'un des associés ?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "shareholders" => [
                        "items" => [
                            "order" => [
                                "shareholder_type",
                                "first_name",
                                "last_name",
                                "id_type",
                                "id_number",
                                "id_document",
                                "phone",
                                "is_self",
                                "is_foreign",
                                "nationality",
                                "subject_company_id",
                                "subject_company_name",
                                "subject_company_ice",
                                "subject_company_rc",
                                "shares"
                            ],
                            "shares" => ["ui:widget" => "number"],
                            "shareholder_type" => ["ui:widget" => "select"],
                            "subject_company_id" => ["ui:widget" => "companySelect"]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 44,
                "key" => "self_employed_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Connaissez-vous déjà l’activité de votre auto-entreprise ?",
                    "required" => ["self_employed_activity"],
                    "properties" => [
                        "self_employed_activity" => [
                            "enum" => ["commerce", "services", "artisanat", "restauration", "consulting", "formation", "ecommerce", "design", "photographie", "informatique"],
                            "type" => "string",
                            "title" => "Activité principale",
                            "enumNames" => [
                                "Commerce (vente de produits)",
                                "Prestations de services",
                                "Artisanat",
                                "Restauration / Café",
                                "Consulting / Conseil",
                                "Formation / Coaching",
                                "E-commerce (boutique en ligne)",
                                "Design / Création graphique",
                                "Photographie / Vidéo",
                                "Développement informatique / IT"
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "self_employed_activity" => ["ui:widget" => "select", "ui:placeholder" => "Sélectionnez une activité"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 45,
                "key" => "self_employed_info",
                "json_schema" => json_encode([
                    "type" => "object",
                    "allOf" => [
                        [
                            "if" => ["properties" => ["is_user_shareholder" => ["const" => true]]],
                            "then" => ["required" => ["shareholders"]]
                        ]
                    ],
                    "required" => ["is_user_shareholder", "shareholders"],
                    "properties" => [
                        "shareholder" => [
                            "type" => "object",
                            "title" => "Auto entrepreneur",
                            "required" => ["first_name", "last_name", "id_type"],
                            "properties" => [
                                "phone" => ["type" => "string", "title" => "Téléphone"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "Type de pièce", "enumNames" => ["Carte d'identité Nationale", "Passeport", "Carte de séjour"]],
                                "is_self" => ["type" => "boolean", "title" => "C'est vous", "default" => false],
                                "id_number" => ["type" => "string", "title" => "Numéro de pièce"],
                                "last_name" => ["type" => "string", "title" => "Nom"],
                                "first_name" => ["type" => "string", "title" => "Prénom"],
                                "id_document" => ["type" => "number", "title" => "Justificatif d'identité"]
                            ]
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Êtes-vous l'Auto entrepreneur"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-10-16 00:00:00",
                "updated_at" => null
            ],
            [
                "id" => 46,
                "key" => "brand_owner_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Propriétaire de la marque",
                    "properties" => [
                        "owner_type" => ["enum" => ["self", "person", "company"], "type" => "string", "title" => "Type de propriétaire", "enumNames" => ["Moi (utilisateur actuel)", "Personne Physique", "Personne Morale (Société)"]],
                        "owner_person" => [
                            "type" => "object",
                            "title" => "Personne Physique",
                            "properties" => [
                                "email" => ["type" => "string", "title" => "Email", "format" => "email", "nullable" => true],
                                "phone" => ["type" => "string", "title" => "Téléphone"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "Type de pièce", "enumNames" => ["Carte d'identité Nationale", "Passeport", "Carte de séjour"]],
                                "id_number" => ["type" => "string", "title" => "Numéro de pièce"],
                                "last_name" => ["type" => "string", "title" => "Nom"],
                                "first_name" => ["type" => "string", "title" => "Prénom"],
                                "id_document" => ["type" => "number", "title" => "Justificatif d'identité (upload id)", "nullable" => true]
                            ]
                        ],
                        "owner_company" => [
                            "type" => "object",
                            "title" => "Personne Morale",
                            "properties" => [
                                "email" => ["type" => "string", "title" => "Email", "format" => "email", "nullable" => true],
                                "phone" => ["type" => "string", "title" => "Téléphone", "nullable" => true],
                                "address" => ["type" => "string", "title" => "Adresse", "nullable" => true],
                                "subject_company_id" => ["type" => "number", "title" => "Société (existante dans la plateforme)", "nullable" => true],
                                "subject_company_rc" => ["type" => "string", "title" => "RC (si externe)", "nullable" => true],
                                "subject_company_ice" => ["type" => "string", "title" => "ICE (si externe)", "nullable" => true],
                                "subject_company_name" => ["type" => "string", "title" => "Raison sociale (si externe)", "nullable" => true]
                            ],
                            "description" => "Sélectionnez une société existante sur la plateforme OU renseignez une société externe."
                        ]
                    ],
                    "description" => "Indiquez qui dépose la marque : vous-même, une autre personne physique, ou une personne morale (société)."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 47,
                "key" => "brand_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Nom de la marque",
                    "properties" => [
                        "logo" => ["type" => "upload", "title" => "Logo"],
                        "brand_name" => ["type" => "string", "title" => "Nom de la marque"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["brand_name", "logo"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-03 12:10:25"
            ],
            [
                "id" => 48,
                "key" => "brand_activity_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Classe d'activité",
                    "required" => ["classes"],
                    "properties" => [
                        "classes" => [
                            "type" => "array",
                            "items" => ["type" => "string", "title" => "Classe d'activité"],
                            "title" => "Classes sélectionnées",
                            "minItems" => 1,
                            "uniqueItems" => true
                        ]
                    ],
                    "description" => "Sélectionnez une ou plusieurs classes d'activité correspondant à votre marque."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-03 12:10:25"
            ],
            [
                "id" => 50,
                "key" => "legal_form_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Forme juridique de la société ?",
                    "required" => ["legal_form"],
                    "properties" => [
                        "legal_form" => ["type" => "string", "title" => "Forme juridique de la société"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "legal_form" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 51,
                "key" => "accounting_method_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Comment souhaitez-vous nous confier votre comptabilité ?",
                    "required" => ["accounting_method"],
                    "properties" => [
                        "accounting_method" => ["type" => "string", "title" => "Comment souhaitez-vous nous confier votre comptabilité ? "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "accounting_method" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 52,
                "key" => "company_age_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Ancienneté de la société .",
                    "required" => ["company_age"],
                    "properties" => [
                        "company_age" => ["type" => "string", "title" => "Ancienneté de la société"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "company_age" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 53,
                "key" => "employees_number_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Nombre d'employés .",
                    "required" => ["employees_number"],
                    "properties" => [
                        "employees_number" => ["type" => "string", "title" => "Nombre d'employés"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "empolyees_number" => ["ui:widget" => "text"] // typo preserved
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 54,
                "key" => "monthly_transactions_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Volume de transactions bancaires par mois: ",
                    "required" => ["monthly_transactions"],
                    "properties" => [
                        "monthly_transactions" => ["type" => "string", "title" => "Volume de transactions bancaires par mois: "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "monthly_transactions" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 55,
                "key" => "monthly_invoices_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Volume moyen des factures d'achat et de vente par mois: ",
                    "required" => ["monthly_invoices"],
                    "properties" => [
                        "monthly_invoices" => ["type" => "string", "title" => "Volume moyen des factures d'achat et de vente par mois: "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "monthly_invoices" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 56,
                "key" => "average_revenue_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Chiffre d'affaires moyen :",
                    "required" => ["average_revenue"],
                    "properties" => [
                        "average_revenue" => ["type" => "string", "title" => "Chiffre d'affaires moyen : "]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "average_revenue" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 49,
                "key" => "company_info_v2",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Information de la société",
                    "required" => [],
                    "properties" => [
                        "name" => ["type" => "string", "title" => "Nom de la société"],
                        "rc_document_id" => ["type" => "number", "title" => "RC"],
                        "contrat_bail_id" => ["type" => "number", "title" => "Contrat de bail ou de Domiciliation"],
                        "tax_certificate_id" => ["type" => "number", "title" => "Attestation d'identifiant fiscale"],
                        "statuts_document_id" => ["type" => "number", "title" => "Statuts"],
                        "tax_registration_id" => ["type" => "number", "title" => "Attestation d'inscription à la taxe professionnel"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "rc" => ["ui:widget" => "text"],
                    "ice" => ["ui:widget" => "text"],
                    "current_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 2,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 2,
                "key" => "company_name_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Connaissez-vous déjà le Nom de votre société ?",
                    "required" => ["proposed_name"],
                    "properties" => [
                        "proposed_name" => ["type" => "string", "title" => "Choix 1"],
                        "proposed_name_2" => ["type" => "string", "title" => "Choix 2"],
                        "proposed_name_3" => ["type" => "string", "title" => "Choix 3"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "alt_name" => ["ui:widget" => "text"],
                    "proposed_name" => ["ui:widget" => "text"],
                    "proposed_name_2" => ["ui:widget" => "text"],
                    "proposed_name_3" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-12-19 00:06:38"
            ],
            [
                "id" => 36,
                "key" => "address_succursale_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Adresse De Succursale",
                    "required" => ["address"],
                    "properties" => [
                        "city" => ["enum" => ["yes", "no"], "type" => "string", "title" => "L'adresse de succursale sera-elle située dans la même ville que la société mère ?", "enumNames" => ["Oui", "No"]],
                        "hint" => ["type" => "hint", "title" => "Si l’adresse de la succursale se situe dans une autre ville, un montant de 2000 DH sera ajouté au total."],
                        "address" => ["type" => "string", "title" => "Quelle sera l’adresse de la succursale ?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "city" => ["ui:widget" => "radio"],
                    "order" => ["address", "city"],
                    "address" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "fr",
                "created_at" => null,
                "updated_at" => null
            ]
        ]);
    }
}
