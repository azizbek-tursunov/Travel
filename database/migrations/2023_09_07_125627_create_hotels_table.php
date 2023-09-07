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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('image_uz');
            $table->string('link_uz');
            $table->text('description_uz');
            $table->string('name_ru');
            $table->string('image_ru');
            $table->string('link_ru');
            $table->text('description_ru');
            $table->string('name_en')->nullable();
            $table->string('image_en')->nullable();
            $table->string('link_en')->nullable();
            $table->text('description_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
