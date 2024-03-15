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
        Schema::create('payments_history', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 191);
            $table->string('payment_code', 191);
            $table->string('payment_bank', 191);
            $table->string('payment_date', 191);
            $table->string('amount', 191);
            $table->string('time_rechange', 191);
            $table->string('description', 191);
            $table->string('product_type', 191);
            $table->string('status', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_history');
    }
};
