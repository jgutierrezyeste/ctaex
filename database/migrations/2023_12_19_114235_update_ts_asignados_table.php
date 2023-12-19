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
        Schema::table('ts_asignados', function (Blueprint $table) {
            $table->renameColumn('trabajador_social','nombre');
        });

        Schema::rename('ts_asignados','trabajores_sociales');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ts_asignados', function (Blueprint $table) {
            $table->renameColumn('nombre','trabajador_social');
        });
        Schema::rename('trabajores_sociales','ts_asignados');
    }
};
