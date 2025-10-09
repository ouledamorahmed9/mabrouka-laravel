<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_url',
        'website_url',
        'is_active',
        'gallery', // <-- ADDED
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'gallery' => 'array', // <-- ADDED
    ];
}

