<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * Les champs qui peuvent être remplis en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'content',
        'image',
        'rating',
        'is_active',
    ];
}

