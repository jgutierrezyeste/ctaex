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
        Schema::table('administracion_biens', function (Blueprint $table) {
            $table->renameColumn('situacion','estado');
        });
        Schema::rename('administracion_biens','adminsitracion_bienes');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('administracion_bienes','administracion_biens');
        Schema::table('administracion_biens', function (Blueprint $table) {
            $table->renameColumn('estado','situacion');
        });
    }
};
