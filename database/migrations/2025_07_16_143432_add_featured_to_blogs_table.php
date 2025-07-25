<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('blogs', function (Blueprint $table) {
        $table->boolean('featured')->default(false)->after('image');
    });
}

public function down()
{
    Schema::table('blogs', function (Blueprint $table) {
        $table->dropColumn('featured');
    });
}

};
