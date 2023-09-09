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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->text('description_uz')->nullable();
            $table->string('image_uz');
            $table->string('name_ru');
            $table->text('description_ru')->nullable();
            $table->string('image_ru');
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('image_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
