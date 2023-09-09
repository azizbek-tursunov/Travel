<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->json('banner');
            $table->string('about_uz');
            $table->string('about_text_uz');
            $table->string('about_ru');
            $table->string('about_text_ru');
            $table->string('about_en');
            $table->string('about_text_en');
            $table->string('image');
            $table->string('image2');
            $table->string('video_text_uz');
            $table->string('video_text_ru');
            $table->string('video_text_en');
            $table->string('video_background');
            $table->string('video_link');
            $table->string('CTa_text_uz');
            $table->string('CTa_text_ru');
            $table->string('CTa_text_en');
            $table->string('CTa_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
