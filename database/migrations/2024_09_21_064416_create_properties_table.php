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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('category', 100)->nullable();
            $table->string('type', 100)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('area', 7, 2)->comment('sqft')->nullable();
            $table->string('location')->nullable();
            $table->smallInteger('bed_rooms')->nullable();
            $table->smallInteger('bath_rooms')->nullable();
            $table->string('amenities')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('hashtags')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('status', 25)->comment('Active, Inactive')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
