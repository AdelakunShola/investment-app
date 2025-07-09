<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('condition')->nullable();
            $table->string('dimensions')->nullable();

            $table->decimal('price', 10, 2)->nullable();
            $table->json('payment_options')->nullable(); // e.g. ["bitcoin", "ethereum"]
            $table->json('images')->nullable(); // array of image URLs or paths

            $table->unsignedBigInteger('share_count')->default(0); // total shares

            $table->timestamps();
        });

        Schema::create('item_user_shares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('platform')->nullable(); // e.g., 'facebook', 'twitter'
            $table->string('proof_url')->nullable(); // link to social media post
            $table->string('proof_screenshot')->nullable(); // image file path
            $table->boolean('is_verified')->default(false); // manually approved?
            $table->decimal('reward_amount', 10, 2)->nullable(); // paid amount
            $table->date('shared_at')->nullable();

            $table->unique(['item_id', 'user_id', 'shared_at']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('item_user_shares');
        Schema::dropIfExists('items');
    }
}
