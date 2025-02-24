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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name', 255)->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('address', 255);
            $table->tinyInteger('gender')->comment('0: 女性, 1: 男性');
            $table->string('email', 255);
            $table->string('phone_prefix', 255);
            $table->string('phone_number');
            $table->string('building', 255);
            $table->text('message');
            $table->text('detail');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('first_name')->nullable(false)->change(); // 元に戻す
        });
    }
};
