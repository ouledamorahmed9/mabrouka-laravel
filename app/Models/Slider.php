<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
        use HasFactory;

        protected $fillable = [
            'image_url',
            'title',
            'subtitle',
            'button_text',
            'button_link',
            'is_active',
        ];
}
