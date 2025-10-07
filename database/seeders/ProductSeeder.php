<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'category',
        'color',
        'pieces',
        'type',
        'for_sale',
        'for_rent',
        'bestseller',
        'image_url',
        'gallery',
    ];

    /**
     * Les attributs qui doivent être castés.
     *
     * @var array
     */
    protected $casts = [
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'bestseller' => 'boolean',
        'gallery' => 'array', // Laravel gérera automatiquement la conversion JSON
    ];
}
