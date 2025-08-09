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
    if (!Schema::hasColumn('blogs', 'category_id')) {
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreignId('category_id')
                  ->nullable()
                  ->constrained('blog_categories')
                  ->nullOnDelete();
        });
    }
}

public function down(): void
{
    if (Schema::hasColumn('blogs', 'category_id')) {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}

};
