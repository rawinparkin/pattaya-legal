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
        Schema::create('home_services', function (Blueprint $table) {
            $table->id();
            $table->string('title_service')->nullable();
            $table->string('title_why')->nullable();
            $table->string('short_title')->nullable();
            $table->string('button_title')->nullable();
            $table->string('title_card_1')->nullable();
            $table->string('des_1')->nullable();
            $table->string('title_card_2')->nullable();
            $table->string('des_2')->nullable();
            $table->string('title_card_3')->nullable();
            $table->string('des_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_services');
    }
};