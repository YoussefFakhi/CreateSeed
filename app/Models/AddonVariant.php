<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddonVariant extends Model
{
    protected $fillable = [
        'addon_id', 'label', 'option_key', 'price', 'is_active', 'metadata', 'locale'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'metadata' => 'array', // automatically handles [] or null
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
}

