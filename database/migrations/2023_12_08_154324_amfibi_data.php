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
        Schema::create('amfibis', function (Blueprint $table) {
            $table->id();
            $table->string('image', 500);
            $table->string('nama', 500);
            $table->string('nama_ilmiah', 500);
            $table->string('jenis', 500);
            $table->string('habitat', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amfibis');
    }
};
