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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'for_sale' => 'boolean',
        'for_rent' => 'boolean',
        'bestseller' => 'boolean',
        'gallery' => 'array',
    ];
}

