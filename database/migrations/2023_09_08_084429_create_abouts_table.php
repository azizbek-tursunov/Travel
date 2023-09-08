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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->text('description_uz');
            $table->string('title2_uz');
            $table->text('description2_uz');
            $table->string('title_ru');
            $table->text('description_ru');
            $table->string('title2_ru');
            $table->text('description2_ru');
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('title2_en')->nullable();
            $table->text('description2_en')->nullable();
            $table->string('banner_image');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
