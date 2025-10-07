<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('category');
            $table->string('color');
            $table->integer('pieces')->default(1);
            $table->string('type');
            $table->boolean('for_sale')->default(false);
            $table->boolean('for_rent')->default(false);
            $table->boolean('bestseller')->default(false);
            $table->string('image_url');
            $table->json('gallery')->nullable(); // Pour stocker une liste d'images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
