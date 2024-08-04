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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('type', 15)->comment('blog, guide')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('hashtags')->nullable();
            $table->string('featured_image')->nullable();
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('category')->nullable();
            $table->boolean('status')->comment('1-publish, 0-draft')->default(0);
            $table->unsignedBigInteger('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
