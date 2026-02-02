<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    protected $fillable = [
        'key', 'title', 'service_id', 'price', 'price_mode',
        'form_key', 'has_form', 'description', 'is_active'
        ,'locale'
    ];

    protected $casts = [
        'has_form' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function variants()
    {
        return $this->hasMany(AddonVariant::class);
    }
}
