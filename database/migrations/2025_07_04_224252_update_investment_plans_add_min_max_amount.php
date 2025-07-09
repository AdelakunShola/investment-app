<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('investment_plans', function (Blueprint $table) {
            $table->decimal('min_amount', 10, 2)->nullable();
            $table->decimal('max_amount', 10, 2)->nullable();
            $table->dropColumn('amount');
        });
    }

    public function down(): void
    {
        Schema::table('investment_plans', function (Blueprint $table) {
            $table->decimal('amount', 10, 2)->nullable();
            $table->dropColumn(['min_amount', 'max_amount']);
        });
    }
};
