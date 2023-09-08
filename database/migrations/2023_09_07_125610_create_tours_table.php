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
//        TODO: hammasiga banner image qo'shib chiqamiz
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->text('description_uz');
            $table->string('direction_uz');
            $table->string('image_uz');
            $table->string('name_ru');
            $table->text('description_ru');
            $table->string('direction_ru');
            $table->string('image_ru');
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('direction_en')->nullable();
            $table->string('image_en')->nullable();
            $table->bigInteger('price');
            $table->string('banner_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
