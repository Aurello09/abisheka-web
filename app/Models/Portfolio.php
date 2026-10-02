<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'completion_date' => 'date',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
