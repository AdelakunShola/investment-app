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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('description')->nullable();
            $table->string('amount');
            $table->string('type');
            $table->string('charge')->default('0');
            $table->string('final_amount')->default('0');

            $table->string('method')->nullable();
            $table->string('pay_currency')->nullable();
            $table->double('pay_amount')->nullable();

            $table->text('manual_field_data')->nullable();
            $table->text('approval_cause')->nullable();

            $table->string('status');

            $table->timestamps();

            // Optional: Add foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
