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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Basic identity
            $table->unsignedBigInteger('ranking_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();


            
            $table->string('country')->nullable();
            $table->enum('gender', ['male', 'female', 'other', ''])->default('')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->text('address')->nullable();

            $table->tinyInteger('deposit_status')->default(1);
            $table->tinyInteger('withdraw_status')->default(1);
            $table->tinyInteger('transfer_status')->default(1);


            // KYC & Identity
            $table->string('document_type')->nullable(); // e.g. passport, NIN
            $table->string('document_number')->nullable();
            $table->string('id_document_path')->nullable(); // path to uploaded file
            $table->boolean('kyc_verified')->default(false);

            // Investment / Account
            $table->decimal('wallet_balance', 16, 2)->default(0.00);
            $table->decimal('profit_balance', 16, 2)->default(0.00);
            $table->decimal('total_invested', 16, 2)->default(0.00);
            $table->decimal('total_withdrawn', 16, 2)->default(0.00);
            $table->decimal('earnings', 16, 2)->default(0.00);

            // Bank Info
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();

            // Referral System
          
            $table->integer('referral_bonus')->default(0);
            $table->string('referral_code')->unique()->nullable();
            $table->unsignedBigInteger('referred_by')->nullable();



            // Status & Security
            $table->boolean('is_active')->default(true);
            $table->enum('role',['admin','user'])->default('user');
            $table->boolean('two_fa_enabled')->default(false);
            $table->string('two_fa_secret')->nullable();

            // Session & tokens
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('referred_by')->references('id')->on('users')->onDelete('set null');
        });




        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};




























            