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
           $table->unsignedBigInteger('investment_plan_id')->nullable()->after('id');
            $table->foreign('investment_plan_id')->references('id')->on('investment_plans')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['investment_plan_id']);
            $table->dropColumn('investment_plan_id');
        });
    }
};
