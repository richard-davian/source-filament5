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
        Schema::create('app_settings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();

            // Basic identity
            $table->string('app_name', 150)->nullable();
            $table->string('tagline', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('logo_url', 255)->nullable();
            $table->string('favicon_url', 255)->nullable();

            // Contact
            $table->string('domain', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('whatsapp_number', 30)->nullable();
            $table->text('address')->nullable();
            $table->string('map_url', 255)->nullable();
            $table->text('map_embed_code')->nullable();

            // Legal & Compliance
            $table->text('copyright_text')->nullable();
            $table->string('privacy_url', 255)->nullable();
            $table->string('terms_url', 255)->nullable();

            // Localization
            $table->string('timezone', 50)->default('Asia/Jakarta');
            $table->string('locale', 10)->default('id');       // 'id', 'en', dst
            $table->string('currency', 10)->default('IDR');    // 'IDR', 'USD', dst

            // Operations
            $table->boolean('maintenance_mode')->default(false);
            $table->text('maintenance_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_settings');
    }
};
