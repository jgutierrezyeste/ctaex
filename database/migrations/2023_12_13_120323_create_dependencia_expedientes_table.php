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
        Schema::create('dependencia_expedientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expediente_id')->nullable()->default();
            $table->text('activo')->nullable()->default(null);
            $table->bigInteger('grado_dependencia_id')->nullable()->default(null);
            $table->bigInteger('nivel_dependencia_id')->nullable()->default(null);
            $table->date('fecha_resolucion')->nullable()->default(null);
            $table->date('fecha_efectos')->nullable()->default(null);
            $table->bigInteger('dependenciaservicio_id')->nullable()->default(null);
            $table->bigInteger('dependenciaserviciosubtipo_id')->nullable()->default(null);
            $table->bigInteger('prestaciondependencia_id')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencia_expedientes');
    }
};
