<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category',
        'image_url',
        'gallery',
        'color',    // <-- ADDED
        'pieces',   // <-- ADDED
        'type',     // <-- ADDED
        'for_sale',
        'for_rent',
        'bestseller',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'gallery' => 'array',
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'bestseller' => 'boolean',
    ];
}

