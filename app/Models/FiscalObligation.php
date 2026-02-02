<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FiscalObligation extends Model
{
   use HasFactory;

    protected $fillable = [
        'code',
        'category',
        'label',
        'periodicity',
        'rule_text',
        'client_text',
        'is_active',
        'local',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
