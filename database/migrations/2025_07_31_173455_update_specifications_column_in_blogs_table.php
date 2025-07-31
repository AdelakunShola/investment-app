<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('specifications'); // drop the existing json column
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->text('specifications')->nullable(); // re-add as text
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('specifications'); // drop the text column
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->json('specifications')->nullable(); // re-add as json if rolling back
        });
    }
};
