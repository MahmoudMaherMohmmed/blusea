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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('whatsapp_url')->nullable();
            $table->text('telegram_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
