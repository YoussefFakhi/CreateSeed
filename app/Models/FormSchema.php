<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSchema extends Model
{
    protected $fillable = [
        'key',
        'json_schema',
        'ui_schema',
        'version',
        'locale',
    ];

    protected $casts = [
        'json_schema' => 'array',
        'ui_schema' => 'array',
        'version' => 'integer',
    ];
}
