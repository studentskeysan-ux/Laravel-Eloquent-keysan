<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->foreignId('jabatan_id')
                ->nullable()
                ->after('departemen_id')
                ->constrained('jabatan')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('karyawans', function (Blueprint $table) {
            $table->dropConstrainedForeignId('jabatan_id');
        });
    }
};