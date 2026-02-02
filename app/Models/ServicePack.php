<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePack extends Model
{
    protected $fillable = [
        'service_id', 'slug', 'title', 'subtitle', 'description',
        'price', 'advantages', 'is_recommended', 'position', 'enabled'
    ];

    protected $casts = [
        'advantages' => 'array',
        'is_recommended' => 'boolean',
        'enabled' => 'boolean',
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
