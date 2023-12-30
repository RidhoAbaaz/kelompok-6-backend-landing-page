<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('Penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('username', 500)->unique();
            $table->string('tanggal_lahir', 500);
            $table->string('gender', 500);
            $table->string('region', 500);
            $table->string('no_telepon', 500);
            $table->string('email', 500);
            $table->string('password', 500)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Datas');
    }
};
