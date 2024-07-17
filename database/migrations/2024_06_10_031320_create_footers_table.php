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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();

            $table->string('white_title')->nullable();
            $table->string('yellow_title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();

            $table->string('title_2')->nullable();
            $table->string('topic_1')->nullable();
            $table->string('topic_2')->nullable();
            $table->string('topic_3')->nullable();
            $table->string('topic_4')->nullable();
            $table->string('topic_5')->nullable();
            $table->string('topic_6')->nullable();
            $table->string('topic_7')->nullable();
            $table->string('topic_8')->nullable();

            $table->string('title_question')->nullable();
            $table->string('title_hours')->nullable();
            $table->string('title_open')->nullable();
            $table->string('title_close')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};