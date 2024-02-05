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
        Schema::rename('discapacidad_expedientes','discapacidades');
        Schema::rename('dependencia_expedientes','dependencias');
        Schema::rename('judiciales_defensas','defensas_judiciales');
        Schema::rename('reintregros','restituciones');
        Schema::rename('tipos_resolucion','figuras');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('discapacidades','discapacidad_expedientes');
        Schema::rename('dependencias','dependencia_expedientes');
        Schema::rename('defensas_judiciales','judiciales_defensas');
        Schema::rename('restituciones','reintregros');
        Schema::rename('figuras','tipos_resolucion');
    }
};