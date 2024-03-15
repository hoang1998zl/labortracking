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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_address', 191);
            $table->string('website_phone', 191);
            $table->string('website_email', 191);
            $table->string('website_tax_code', 191);
            $table->string('website_name', 191);
            $table->string('meta_description', 191);
            $table->string('meta_keyword', 191);
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
