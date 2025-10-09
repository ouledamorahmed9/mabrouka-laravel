<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('category')->nullable();
            $table->string('image_url');
            $table->json('gallery')->nullable();
            $table->string('color')->nullable();
            $table->integer('pieces')->nullable();
            $table->string('type')->nullable();
            $table->boolean('for_sale')->default(false);
            $table->boolean('for_rent')->default(false);
            $table->boolean('bestseller')->default(false);
            $table->boolean('is_active')->default(true); // Added here
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

