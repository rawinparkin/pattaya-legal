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
        Schema::create('home_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title_welcome')->nullable();
            $table->string('title_2')->nullable();
            $table->string('title_rotate')->nullable();
            $table->string('long_title')->nullable();
            $table->string('button_title')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_headers');
    }
};