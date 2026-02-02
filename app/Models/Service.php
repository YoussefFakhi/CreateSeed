<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'key', 'title', 'description', 'base_price', 'sla_days', 'enabled','locale'
    ];

    protected $casts = [
        'enabled' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function addons()
    {
        return $this->hasMany(Addon::class);
    }

    public function servicePacks()
    {
        return $this->hasMany(ServicePack::class);
    }
}

