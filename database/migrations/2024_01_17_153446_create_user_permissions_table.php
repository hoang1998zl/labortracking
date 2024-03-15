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
        Schema::create('user_permissions', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("password");
            $table->string("boss_account_id");
            $table->integer("status");
            $table->boolean("permission_cauhinh");
            $table->boolean("permission_hoso");
            $table->boolean("permission_bangluong");
            $table->boolean("permission_duyetapp");
            $table->boolean("permission_chamcong");
            $table->boolean("permission_tamung");
            $table->boolean("permission_macroluong");
            $table->boolean("permission_daotao");
            $table->boolean("permission_congno");
            $table->boolean("permission_thuongphat");
            $table->boolean("permission_baohiem");
            $table->boolean("permission_suckhoe");
            $table->boolean("permission_kyquy");
            $table->boolean("permission_congviec");
            $table->boolean("permission_babuoc");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_permissions');
    }
};
