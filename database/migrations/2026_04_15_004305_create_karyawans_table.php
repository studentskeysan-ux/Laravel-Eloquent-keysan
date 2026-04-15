<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departemen_id')->constrained('departemen')->cascadeOnDelete();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('telepon', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};