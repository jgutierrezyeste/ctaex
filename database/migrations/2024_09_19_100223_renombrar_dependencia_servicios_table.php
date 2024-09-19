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
        Schema::rename('dependencia_servicios','prestacion_dependencias_servicios');
        Schema::rename('dependencia_servicio_subtipos','prestacion_dependencias_economicas');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
