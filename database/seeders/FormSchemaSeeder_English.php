<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSchemaSeeder_English extends Seeder
{
    /**
     * Run the database seeds.
     */
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
                                    "powers" => ["enum" => ["all", "limited"], "type" => "string", "title" => "Powers"],
                                    "address" => ["type" => "string", "title" => "Address"],
                                    "full_name" => ["type" => "string", "title" => "Full Name"],
                                    "national_id" => ["type" => "string", "title" => "ID Card"]
                                ]
                            ],
                            "title" => "Managers"
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
                "locale" => "en",
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
                        "id_scan" => ["type" => "string", "title" => "ID Card Scan"],
                        "seat_proof" => ["type" => "string", "title" => "Registered Office Proof"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "id_scan" => ["ui:widget" => "file"],
                    "seat_proof" => ["ui:widget" => "file"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                        "powers" => ["enum" => ["all", "limited"], "type" => "string", "title" => "Powers"],
                        "address" => ["type" => "string", "title" => "Address"],
                        "full_name" => ["type" => "string", "title" => "Full Name"],
                        "national_id" => ["type" => "string", "title" => "ID Card"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "powers" => ["ui:widget" => "select"],
                    "address" => ["ui:widget" => "textarea"],
                    "full_name" => ["ui:widget" => "text"],
                    "national_id" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                        "new_address" => ["type" => "string", "title" => "New Address"],
                        "proof_document" => ["type" => "string", "title" => "Proof Document"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "new_address" => ["ui:widget" => "textarea"],
                    "proof_document" => ["ui:widget" => "file"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 30,
                "key" => "changement_denomination_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Company Name Change",
                    "required" => ["name_change"],
                    "properties" => [
                        "name_change" => [
                            "type" => "object",
                            "title" => "Change Details",
                            "required" => ["current_name", "new_name"],
                            "properties" => [
                                "proposed_name" => ["type" => "string", "title" => "Option 1"],
                                "proposed_name_2" => ["type" => "string", "title" => "Option 2"],
                                "proposed_name_3" => ["type" => "string", "title" => "Option 3"]
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 10,
                "key" => "company_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Did you create your company with Legalservices?",
                    "required" => [],
                    "properties" => [
                        "name" => ["type" => "string", "title" => "Company Name"],
                        "with_us" => ["type" => "boolean", "title" => "Did you create your company with Legalservices?"],
                        "rc_document_id" => ["type" => "number", "title" => "Commercial Registry Number"],
                        "contrat_de_bail" => ["type" => "number", "title" => "Lease Agreement"],
                        "statuts_document_id" => ["type" => "number", "title" => "Articles of Incorporation"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "rc" => ["ui:widget" => "text"],
                    "ice" => ["ui:widget" => "text"],
                    "current_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                    "title" => "How do you want to modify your company's activity?",
                    "required" => ["change_type", "activities"],
                    "properties" => [
                        "activities" => [
                            "type" => "array",
                            "items" => ["type" => "string", "title" => "Activity"],
                            "title" => "New Activities",
                            "minItems" => 1
                        ],
                        "change_type" => [
                            "enum" => ["add", "replace"],
                            "type" => "string",
                            "title" => "Type of Modification",
                            "enumNames" => ["Add activity(ies)", "Complete change"]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 29,
                "key" => "transfert_siege_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Registered Office Transfer",
                    "required" => [],
                    "properties" => [
                        "hint" => ["type" => "hint", "title" => "If the transfer is to another city, 2000 MAD will be added to the quote."],
                        "same_city" => ["enum" => ["yes", "no"], "type" => "string", "title" => "Will the new registered office be in the same city as the current one?", "enumNames" => ["Yes", "No"]],
                        "new_address" => ["type" => "string", "title" => "What will be the new address of the company?"],
                        "current_address" => ["type" => "string", "title" => "What is the current address of the company?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["current_address", "hint", "same_city", "new_adress"],
                    "same_city" => ["ui:widget" => "radio"],
                    "new_address" => ["ui:widget" => "text"],
                    "current_address" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 41,
                "key" => "augmentation_capital_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Capital Increase",
                    "required" => [],
                    "properties" => [
                        "new_capital" => ["type" => "number", "title" => "Your new share capital will be"],
                        "capital_added" => ["type" => "number", "title" => "By how much would you like to increase your capital?"],
                        "current_capital" => ["type" => "number", "title" => "What is your current capital?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["current_capital", "capital_added", "new_capital"],
                    "new_capital" => ["ui:widget" => "number"],
                    "capital_added" => ["ui:widget" => "number"],
                    "current_capital" => ["ui:widget" => "number"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                        "address" => ["type" => "string", "title" => "Registered Office Address"],
                        "capital" => ["type" => "number", "title" => "Share Capital"],
                        "activity" => ["type" => "string", "title" => "Main Activity"],
                        "company_name" => ["type" => "string", "title" => "Company Name"],
                        "shareholders" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "properties" => [
                                    "name" => ["type" => "string"],
                                    "shares" => ["type" => "number"]
                                ]
                            ],
                            "title" => "Shareholders"
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "address" => ["ui:widget" => "textarea"],
                    "capital" => ["ui:widget" => "number"],
                    "company_name" => ["ui:placeholder" => "e.g., My SARL Company"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-14 09:42:17",
                "updated_at" => "2025-09-14 09:42:17"
            ],
            [
                "id" => 3,
                "key" => "company_activity_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Do you already know your company's activity?",
                    "required" => ["activity"],
                    "properties" => [
                        "activity" => ["type" => "string", "title" => "Activity"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "activity" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                        "address" => ["type" => "string", "title" => "Registered Office Address"],
                        "capital" => ["type" => "number", "title" => "Share Capital"],
                        "activity" => ["type" => "string", "title" => "Main Activity"],
                        "company_name" => ["type" => "string", "title" => "Company Name"],
                        "manager_name" => ["type" => "string", "title" => "Manager Name"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "address" => ["ui:widget" => "textarea"],
                    "capital" => ["ui:widget" => "number"],
                    "company_name" => ["ui:placeholder" => "e.g., My SARLAU Company"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-14 09:42:17",
                "updated_at" => "2025-09-14 09:42:17"
            ],
            [
                "id" => 1,
                "key" => "client_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Let's get started! Who is submitting the request on Legalservices?",
                    "required" => ["full_name", "phone", "email"],
                    "properties" => [
                        "email" => ["type" => "email", "title" => "Email"],
                        "phone" => ["type" => "string", "title" => "Phone"],
                        "full_name" => ["type" => "string", "title" => "Full Name"]
                    ],
                    "description" => "This information will allow us to assist you during your incorporation process and is required to prepare your file."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "cin" => ["ui:widget" => "text"],
                    "email" => ["ui:widget" => "email"],
                    "phone" => ["ui:widget" => "text"],
                    "full_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-24 21:05:35"
            ],
            [
                "id" => 6,
                "key" => "capital_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Share Capital",
                    "required" => ["capital"],
                    "properties" => [
                        "capital" => [
                            "type" => "object",
                            "title" => "What is the total capital of the company?",
                            "required" => ["amount", "type", "allocations"],
                            "properties" => [
                                "type" => ["enum" => ["cash", "in_kind", "mixed"], "type" => "string", "title" => "Capital Type", "default" => "cash", "enumNames" => ["Cash Contribution", "In-Kind Contribution", "Mixed"]],
                                "amount" => ["type" => "number", "title" => "Total Amount (MAD)", "minimum" => 0],
                                "allocations" => [
                                    "type" => "array",
                                    "items" => [
                                        "type" => "object",
                                        "required" => ["shareholder_id", "percent"],
                                        "properties" => [
                                            "percent" => ["type" => "number", "title" => "Percentage", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01],
                                            "shareholder_id" => ["type" => "number", "title" => "Shareholder (ID)"]
                                        ]
                                    ],
                                    "title" => "Allocation Among Shareholders (must total 100%)",
                                    "minItems" => 1,
                                    "description" => "Tip: The sum of percentages must be exactly 100%."
                                ]
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "capital" => ["ui:widget" => "number"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                                    "phone" => ["type" => "string", "title" => "Phone"],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Permit"]],
                                    "is_self" => ["type" => "boolean", "title" => "Is this you?", "default" => false],
                                    "id_number" => ["type" => "string", "title" => "ID Number"],
                                    "last_name" => ["type" => "string", "title" => "Last Name"],
                                    "first_name" => ["type" => "string", "title" => "First Name"],
                                    "id_document" => ["type" => "number", "title" => "Identity Document"]
                                ]
                            ],
                            "title" => "Shareholders",
                            "minItems" => 1
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Are you one of the shareholders?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "shareholders" => [
                        "items" => [
                            "shares" => ["ui:widget" => "number", "ui:options" => ["min" => 1, "step" => 1]],
                            "id_type" => ["ui:widget" => "radio", "ui:options" => ["inline" => true]],
                            "is_self" => ["ui:widget" => "hidden"],
                            "id_number" => ["ui:placeholder" => "ID Number"],
                            "last_name" => ["ui:placeholder" => "Last Name"],
                            "first_name" => ["ui:placeholder" => "First Name"],
                            "is_foreign" => ["ui:widget" => "switch"],
                            "id_document" => ["ui:widget" => "number", "ui:options" => []],
                            "nationality" => ["ui:widget" => "countrySelect"]
                        ],
                        "ui:widget" => "arrayCards",
                        "ui:options" => ["compact" => true, "itemTitle" => "{{first_name}} {{last_name}}", "showIndex" => false, "addButtonText" => "Add a shareholder"]
                    ],
                    "is_user_shareholder" => ["ui:widget" => "checkbox", "ui:options" => ["inline" => true, "noLabel" => "No", "yesLabel" => "Yes"]]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-04 21:13:32"
            ],
            [
                "id" => 8,
                "key" => "bank_signatories_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Signatories",
                    "required" => ["signature_mode", "signatories"],
                    "properties" => [
                        "signatories" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "properties" => [
                                    "id" => ["type" => "number", "title" => "Shareholder or Manager ID"],
                                    "name" => ["type" => "string", "title" => "Full Name"],
                                    "can_sign" => ["type" => "boolean", "title" => "Can Sign", "default" => false]
                                ]
                            ],
                            "title" => "Authorized Signatories",
                            "description" => "Select the shareholders and managers authorized to sign on behalf of the company."
                        ],
                        "signature_mode" => ["enum" => ["separate", "joint"], "type" => "string", "title" => "Signature Type", "enumNames" => ["Separate", "Joint"], "description" => "Choose signature mode: separate (one signature is sufficient) or joint (all signatories must sign)."]
                    ],
                    "description" => "Who will be the signatories on checks, wire orders, and other banking documents?"
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
                "locale" => "en",
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
                "locale" => "en",
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
                            "title" => "Sole Shareholder",
                            "required" => ["first_name", "last_name", "id_type", "shares"],
                            "properties" => [
                                "phone" => ["type" => "string", "title" => "Phone"],
                                "shares" => ["type" => "integer", "title" => "Shares"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Permit"]],
                                "is_self" => ["type" => "boolean", "title" => "Is this you?", "default" => false],
                                "id_number" => ["type" => "string", "title" => "ID Number"],
                                "last_name" => ["type" => "string", "title" => "Last Name"],
                                "first_name" => ["type" => "string", "title" => "First Name"],
                                "id_document" => ["type" => "number", "title" => "Identity Document"]
                            ]
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Are you the sole shareholder?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "shares" => ["ui:widget" => "number"],
                    "full_name" => ["ui:widget" => "text"],
                    "is_foreign" => ["ui:widget" => "checkbox"],
                    "passport_number" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-09-01 12:23:30"
            ],
            [
                "id" => 39,
                "key" => "accounting",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Accounting",
                    "required" => [],
                    "properties" => [
                        "accounting" => ["type" => "string", "title" => "Accounting"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "accounting" => ["ui:widget" => "input"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 40,
                "key" => "modification_choices_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "What type(s) of modification(s) would you like to make to your company?",
                    "required" => [],
                    "properties" => [
                        "modification_choices" => [
                            "type" => "array",
                            "items" => ["type" => "string"],
                            "title" => "Modification Choices",
                            "minItems" => 1
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-09 12:23:33",
                "updated_at" => null
            ],
            [
                "id" => 42,
                "key" => "company_name_modification_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Company Name Change",
                    "required" => ["proposed_name"],
                    "properties" => [
                        "proposed_name" => ["type" => "string", "title" => "Option 1"],
                        "proposed_name_2" => ["type" => "string", "title" => "Option 2"],
                        "proposed_name_3" => ["type" => "string", "title" => "Option 3"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "alt_name" => ["ui:widget" => "text"],
                    "proposed_name" => ["ui:widget" => "text"],
                    "proposed_name_2" => ["ui:widget" => "text"],
                    "proposed_name_3" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 26,
                "key" => "shares_transfer_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Share Transfer",
                    "required" => ["reason", "sellers", "buyers"],
                    "properties" => [
                        "buyers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "parts_a_acheter_percent"],
                                "properties" => [
                                    "last_name" => ["type" => "string", "title" => "Last Name", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "First Name", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer"], "title" => "Document (ID)"],
                                    "parts_a_acheter_percent" => ["type" => "number", "title" => "Shares to Buy (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01]
                                ]
                            ],
                            "title" => "Buyers",
                            "minItems" => 1
                        ],
                        "reason" => ["enum" => ["new_shareholder", "departure_shareholder", "other"], "type" => "string", "title" => "Why do you wish to transfer shares?", "enumNames" => ["To welcome a new shareholder", "Due to a shareholder's departure", "For other reasons"]],
                        "sellers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "parts_possedees_percent", "parts_a_vendre_percent"],
                                "properties" => [
                                    "last_name" => ["type" => "string", "title" => "Last Name", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "First Name", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer"], "title" => "Document (ID)"],
                                    "parts_a_vendre_percent" => ["type" => "number", "title" => "Shares to Sell (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01],
                                    "parts_possedees_percent" => ["type" => "number", "title" => "Shares Owned (%)", "maximum" => 100, "minimum" => 0, "multipleOf" => 0.01]
                                ]
                            ],
                            "title" => "Sellers",
                            "minItems" => 1
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "hints" => [
                        "buyers.parts_a_acheter_percent" => "Ensure total purchases = total sales.",
                        "sellers.parts_a_vendre_percent" => "The sum of sold percentages must match the sum of purchased percentages."
                    ],
                    "order" => ["reason", "other_reason", "sellers", "buyers"],
                    "rules" => [
                        [
                            "show" => ["other_reason"],
                            "required" => ["other_reason"],
                            "condition" => ["field" => "reason", "value" => "other", "operator" => "="]
                        ]
                    ],
                    "descriptions" => [
                        "buyers" => "Enter each buyer and the percentage they are purchasing.",
                        "sellers" => "Enter each seller and the percentage they are selling."
                    ],
                    "fieldOptions" => [
                        "buyers" => ["inline" => false, "itemTitle" => "Buyer", "addButtonText" => "Add a buyer"],
                        "reason" => ["widget" => "select"],
                        "sellers" => ["inline" => false, "itemTitle" => "Seller", "addButtonText" => "Add a seller"],
                        "other_reason" => ["widget" => "textarea", "placeholder" => "Describe the reason for the transfer…"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 27,
                "key" => "modification_gerance_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Management Change",
                    "required" => ["change_type"],
                    "properties" => [
                        "change_type" => ["enum" => ["add", "remove", "replace"], "type" => "string", "title" => "What management change do you wish to make?", "enumNames" => ["Add a manager", "Remove a manager", "Replace a manager"]],
                        "incoming_managers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "phone", "id_type", "id_number"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Phone", "maxLength" => 20],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_card"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Card"]],
                                    "id_number" => ["type" => "string", "title" => "ID Number", "maxLength" => 50],
                                    "last_name" => ["type" => "string", "title" => "Last Name", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "First Name", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer", "null"], "title" => "Document (ID)"]
                                ]
                            ],
                            "title" => "Incoming Managers"
                        ],
                        "outgoing_managers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "object",
                                "required" => ["first_name", "last_name", "phone", "id_type", "id_number"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Phone", "maxLength" => 20],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_card"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Card"]],
                                    "id_number" => ["type" => "string", "title" => "ID Number", "maxLength" => 50],
                                    "last_name" => ["type" => "string", "title" => "Last Name", "maxLength" => 100],
                                    "first_name" => ["type" => "string", "title" => "First Name", "maxLength" => 100],
                                    "document_id" => ["type" => ["string", "integer", "null"], "title" => "Document (ID)"]
                                ]
                            ],
                            "title" => "Outgoing Managers"
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
                    "incoming_managers" => ["ui:options" => ["itemTitle" => "Incoming Manager", "addButtonText" => "Add an incoming manager"]],
                    "outgoing_managers" => ["ui:options" => ["itemTitle" => "Outgoing Manager", "addButtonText" => "Add an outgoing manager"]],
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
                "locale" => "en",
                "created_at" => "2025-10-05 23:40:05",
                "updated_at" => "2025-10-05 23:40:05"
            ],
            [
                "id" => 43,
                "key" => "subsidiary_shareholders_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Subsidiary Shareholders",
                    "required" => ["is_user_shareholder", "shareholders"],
                    "properties" => [
                        "shareholders" => [
                            "type" => "array",
                            "items" => [
                                "oneOf" => [
                                    [
                                        "title" => "Individual",
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
                                        "title" => "Legal Entity",
                                        "required" => ["subject_company_id"],
                                        "properties" => ["shareholder_type" => ["const" => "company"]]
                                    ]
                                ],
                                "required" => ["shareholder_type", "shares"],
                                "properties" => [
                                    "phone" => ["type" => "string", "title" => "Phone"],
                                    "shares" => ["type" => "number", "title" => "Shares / Percentage"],
                                    "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Permit"]],
                                    "is_self" => ["type" => "boolean", "title" => "Is this you?", "default" => false],
                                    "id_number" => ["type" => "string", "title" => "ID Number"],
                                    "last_name" => ["type" => "string", "title" => "Last Name"],
                                    "first_name" => ["type" => "string", "title" => "First Name"],
                                    "is_foreign" => ["type" => "boolean", "title" => "Foreign", "default" => false],
                                    "id_document" => ["type" => "number", "title" => "Identity Document"],
                                    "nationality" => ["type" => "string", "title" => "Nationality", "default" => "MA"],
                                    "shareholder_type" => ["enum" => ["person", "company"], "type" => "string", "title" => "Shareholder Type", "enumNames" => ["Individual", "Legal Entity"]],
                                    "subject_company_id" => ["type" => "number", "title" => "Company (existing on platform)", "nullable" => true],
                                    "subject_company_rc" => ["type" => "string", "title" => "Commercial Registry (if external)", "nullable" => true],
                                    "subject_company_ice" => ["type" => "string", "title" => "Tax ID (ICE) (if external)", "nullable" => true],
                                    "subject_company_name" => ["type" => "string", "title" => "Company Name (if external)", "nullable" => true],
                                    "representative_first_name" => ["type" => "string", "title" => "Representative First Name", "nullable" => true]
                                ]
                            ],
                            "title" => "Shareholders",
                            "minItems" => 1
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Are you one of the shareholders?"]
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
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 44,
                "key" => "self_employed_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Do you already know the activity of your self-employed business?",
                    "required" => ["self_employed_activity"],
                    "properties" => [
                        "self_employed_activity" => [
                            "enum" => ["commerce", "services", "artisanat", "restauration", "consulting", "formation", "ecommerce", "design", "photographie", "informatique"],
                            "type" => "string",
                            "title" => "Main Activity",
                            "enumNames" => [
                                "Commerce (product sales)",
                                "Service Provision",
                                "Craftsmanship",
                                "Restaurant / Café",
                                "Consulting / Advisory",
                                "Training / Coaching",
                                "E-commerce (online store)",
                                "Design / Graphic Creation",
                                "Photography / Video",
                                "IT / Software Development"
                            ]
                        ]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "self_employed_activity" => ["ui:widget" => "select", "ui:placeholder" => "Select an activity"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
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
                            "title" => "Self-Employed Individual",
                            "required" => ["first_name", "last_name", "id_type"],
                            "properties" => [
                                "phone" => ["type" => "string", "title" => "Phone"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Permit"]],
                                "is_self" => ["type" => "boolean", "title" => "Is this you?", "default" => false],
                                "id_number" => ["type" => "string", "title" => "ID Number"],
                                "last_name" => ["type" => "string", "title" => "Last Name"],
                                "first_name" => ["type" => "string", "title" => "First Name"],
                                "id_document" => ["type" => "number", "title" => "Identity Document"]
                            ]
                        ],
                        "is_user_shareholder" => ["type" => "boolean", "title" => "Are you the self-employed individual?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-10-16 00:00:00",
                "updated_at" => null
            ],
            [
                "id" => 46,
                "key" => "brand_owner_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Trademark Owner",
                    "properties" => [
                        "owner_type" => ["enum" => ["self", "person", "company"], "type" => "string", "title" => "Owner Type", "enumNames" => ["Myself (current user)", "Individual", "Legal Entity (Company)"]],
                        "owner_person" => [
                            "type" => "object",
                            "title" => "Individual",
                            "properties" => [
                                "email" => ["type" => "string", "title" => "Email", "format" => "email", "nullable" => true],
                                "phone" => ["type" => "string", "title" => "Phone"],
                                "id_type" => ["enum" => ["cin", "passport", "residence_permit"], "type" => "string", "title" => "ID Type", "enumNames" => ["National ID Card", "Passport", "Residence Permit"]],
                                "id_number" => ["type" => "string", "title" => "ID Number"],
                                "last_name" => ["type" => "string", "title" => "Last Name"],
                                "first_name" => ["type" => "string", "title" => "First Name"],
                                "id_document" => ["type" => "number", "title" => "Identity Document (upload)", "nullable" => true]
                            ]
                        ],
                        "owner_company" => [
                            "type" => "object",
                            "title" => "Legal Entity",
                            "properties" => [
                                "email" => ["type" => "string", "title" => "Email", "format" => "email", "nullable" => true],
                                "phone" => ["type" => "string", "title" => "Phone", "nullable" => true],
                                "address" => ["type" => "string", "title" => "Address", "nullable" => true],
                                "subject_company_id" => ["type" => "number", "title" => "Company (existing on platform)", "nullable" => true],
                                "subject_company_rc" => ["type" => "string", "title" => "Commercial Registry (if external)", "nullable" => true],
                                "subject_company_ice" => ["type" => "string", "title" => "Tax ID (ICE) (if external)", "nullable" => true],
                                "subject_company_name" => ["type" => "string", "title" => "Company Name (if external)", "nullable" => true]
                            ],
                            "description" => "Select an existing company on the platform OR enter an external company."
                        ]
                    ],
                    "description" => "Indicate who is filing the trademark: yourself, another individual, or a legal entity (company)."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 47,
                "key" => "brand_info_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Trademark Name",
                    "properties" => [
                        "logo" => ["type" => "upload", "title" => "Logo"],
                        "brand_name" => ["type" => "string", "title" => "Trademark Name"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "order" => ["brand_name", "logo"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-03 12:10:25"
            ],
            [
                "id" => 48,
                "key" => "brand_activity_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Activity Class",
                    "required" => ["classes"],
                    "properties" => [
                        "classes" => [
                            "type" => "array",
                            "items" => ["type" => "string", "title" => "Activity Class"],
                            "title" => "Selected Classes",
                            "minItems" => 1,
                            "uniqueItems" => true
                        ]
                    ],
                    "description" => "Select one or more activity classes corresponding to your trademark."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-10-03 12:10:25"
            ],
            [
                "id" => 50,
                "key" => "legal_form_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Company Legal Form?",
                    "required" => ["legal_form"],
                    "properties" => [
                        "legal_form" => ["type" => "string", "title" => "Company Legal Form"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "legal_form" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 51,
                "key" => "accounting_method_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "How would you like to entrust us with your accounting?",
                    "required" => ["accounting_method"],
                    "properties" => [
                        "accounting_method" => ["type" => "string", "title" => "How would you like to entrust us with your accounting?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "accounting_method" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 52,
                "key" => "company_age_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Company Age",
                    "required" => ["company_age"],
                    "properties" => [
                        "company_age" => ["type" => "string", "title" => "Company Age"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "company_age" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 53,
                "key" => "employees_number_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Number of Employees",
                    "required" => ["employees_number"],
                    "properties" => [
                        "employees_number" => ["type" => "string", "title" => "Number of Employees"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "empolyees_number" => ["ui:widget" => "text"] // typo preserved as in original
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 54,
                "key" => "monthly_transactions_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Monthly Bank Transaction Volume:",
                    "required" => ["monthly_transactions"],
                    "properties" => [
                        "monthly_transactions" => ["type" => "string", "title" => "Monthly Bank Transaction Volume:"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "monthly_transactions" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 55,
                "key" => "monthly_invoices_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Average Monthly Purchase and Sales Invoice Volume:",
                    "required" => ["monthly_invoices"],
                    "properties" => [
                        "monthly_invoices" => ["type" => "string", "title" => "Average Monthly Purchase and Sales Invoice Volume:"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "monthly_invoices" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 56,
                "key" => "average_revenue_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Average Revenue:",
                    "required" => ["average_revenue"],
                    "properties" => [
                        "average_revenue" => ["type" => "string", "title" => "Average Revenue:"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "average_revenue" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 49,
                "key" => "company_info_v2",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Company Information",
                    "required" => [],
                    "properties" => [
                        "name" => ["type" => "string", "title" => "Company Name"],
                        "rc_document_id" => ["type" => "number", "title" => "Commercial Registry (RC)"],
                        "contrat_bail_id" => ["type" => "number", "title" => "Lease or Domiciliation Agreement"],
                        "tax_certificate_id" => ["type" => "number", "title" => "Tax Identification Certificate"],
                        "statuts_document_id" => ["type" => "number", "title" => "Articles of Incorporation"],
                        "tax_registration_id" => ["type" => "number", "title" => "Professional Tax Registration Certificate"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "rc" => ["ui:widget" => "text"],
                    "ice" => ["ui:widget" => "text"],
                    "current_name" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 2,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ],
            [
                "id" => 2,
                "key" => "company_name_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Do you already know your company name?",
                    "required" => ["proposed_name"],
                    "properties" => [
                        "proposed_name" => ["type" => "string", "title" => "Option 1"],
                        "proposed_name_2" => ["type" => "string", "title" => "Option 2"],
                        "proposed_name_3" => ["type" => "string", "title" => "Option 3"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "alt_name" => ["ui:widget" => "text"],
                    "proposed_name" => ["ui:widget" => "text"],
                    "proposed_name_2" => ["ui:widget" => "text"],
                    "proposed_name_3" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => "2025-09-01 12:23:30",
                "updated_at" => "2025-12-19 00:06:38"
            ],
            [
                "id" => 36,
                "key" => "address_succursale_v1",
                "json_schema" => json_encode([
                    "type" => "object",
                    "title" => "Branch Address",
                    "required" => ["address"],
                    "properties" => [
                        "city" => ["enum" => ["yes", "no"], "type" => "string", "title" => "Will the branch address be in the same city as the parent company?", "enumNames" => ["Yes", "No"]],
                        "hint" => ["type" => "hint", "title" => "If the branch is located in another city, an amount of 2000 MAD will be added to the total."],
                        "address" => ["type" => "string", "title" => "What will be the branch address?"]
                    ]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "ui_schema" => json_encode([
                    "city" => ["ui:widget" => "radio"],
                    "order" => ["address", "city"],
                    "address" => ["ui:widget" => "text"]
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                "version" => 1,
                "locale" => "en",
                "created_at" => null,
                "updated_at" => null
            ]
        ]);
    }
}
