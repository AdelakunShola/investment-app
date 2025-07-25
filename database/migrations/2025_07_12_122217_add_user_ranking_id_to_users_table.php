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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_ranking_id')->nullable()->after('id');
            $table->foreign('user_ranking_id')
                ->references('id')
                ->on('user_rankings')
                ->nullOnDelete(); // sets to null on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_ranking_id']);
            $table->dropColumn('user_ranking_id');
        });
    }
};
