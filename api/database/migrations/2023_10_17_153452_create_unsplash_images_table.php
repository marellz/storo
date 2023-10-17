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
        Schema::create('unsplash_images', function (Blueprint $table) {
            $table->id();
            $table->string('photo_id');
            $table->text('description')->nullable();
            $table->text('url_full');
            $table->text('url_regular');
            $table->text('url_small');
            $table->string('creator_name');
            $table->string('creator_username');
            $table->text('creator_profile_photo');
            $table->text('creator_profile_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unsplash_images');
    }
};
