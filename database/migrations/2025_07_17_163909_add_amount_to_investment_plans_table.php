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
    Schema::table('investment_plans', function (Blueprint $table) {
        $table->decimal('amount', 15, 2)->nullable()->after('weekly_interest');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('investment_plans', function (Blueprint $table) {
        $table->dropColumn('amount');
    });
}

};
