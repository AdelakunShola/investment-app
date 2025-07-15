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
        Schema::create('user_rankings', function (Blueprint $table) {
            $table->id();
    $table->string('ranking');
    $table->string('ranking_name');
    $table->string('icon')->nullable();
    $table->decimal('minimum_deposit', 12, 2)->default(0);
    $table->decimal('minimum_invest', 12, 2)->default(0);
    $table->decimal('minimum_referral', 12, 2)->default(0);
    $table->decimal('minimum_referral_deposit', 12, 2)->default(0);
    $table->decimal('minimum_referral_invest', 12, 2)->default(0);
    $table->decimal('minimum_earnings', 12, 2)->default(0);
    $table->decimal('bonus', 12, 2)->default(0);
    $table->text('description')->nullable();
    $table->boolean('status')->default(1);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_rankings');
    }
};
