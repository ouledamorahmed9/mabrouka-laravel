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
        'bestseller',
        'new_collection', // <-- ADD THIS LINE
        'for_sale',
        'for_rent',
        'is_active',
        'color',
        'pieces',
        'type',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'gallery' => 'array',
        'bestseller' => 'boolean',
        'new_collection' => 'boolean', // <-- ADD THIS LINE
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'is_active' => 'boolean',
    ];
}
