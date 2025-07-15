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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->string('condition')->nullable(); // e.g., New, Like New, Used
            $table->string('dimensions')->nullable(); // optional for items like furniture
            $table->string('location')->nullable(); // optional
            $table->json('specifications')->nullable(); // custom specs
            $table->string('image')->nullable(); // image upload
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
