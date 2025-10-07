<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = 'Robe ' . $this->faker->words(2, true);
        $slug = Str::slug($name) . '-' . $this->faker->unique()->randomNumber(5);

        // === START OF CORRECTION ===

        // 1. Create the main image and get its full path
        $imagePath = $this->faker->image('public/storage/products', 400, 550, null, false);
        
        // 2. Create the gallery image and get its full path
        $galleryPath = $this->faker->image('public/storage/products', 800, 1000, null, false);

        return [
            'name' => ucfirst($name),
            'slug' => $slug,
            'price' => $this->faker->numberBetween(150, 1200),
            'description' => $this->faker->paragraph(3),
            'category' => $this->faker->randomElement(['Melia', 'Jebba', 'Kontan', 'Accessoire']),
            'color' => $this->faker->randomElement(['Rouge', 'Bleu', 'Noir', 'Doré', 'Argenté']),
            'pieces' => $this->faker->numberBetween(1, 3),
            'type' => $this->faker->randomElement(['Femme', 'Homme', 'Enfant', 'Accessoire']),
            'for_sale' => $this->faker->boolean(),
            'for_rent' => $this->faker->boolean(),
            'bestseller' => $this->faker->boolean(25), // 25% chance of being a bestseller
            
            // 3. Save only the relative path to the database
            'image_url' => 'products/' . basename($imagePath),
            'gallery' => json_encode(['products/' . basename($galleryPath)])
            
            // === END OF CORRECTION ===
        ];
    }
}

