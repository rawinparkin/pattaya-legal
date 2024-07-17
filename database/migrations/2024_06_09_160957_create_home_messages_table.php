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
        Schema::create('home_messages', function (Blueprint $table) {
            $table->id();
            $table->string('title_booking')->nullable();
            $table->string('title_free')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->string('message')->nullable();
            $table->string('button_title')->nullable();
            $table->string('photo')->nullable();

            $table->string('admin_address')->nullable();
            $table->string('admin_phone')->nullable();
            $table->string('admin_email')->nullable();
            $table->string('open_days')->nullable();
            $table->string('close_days')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_messages');
    }
};