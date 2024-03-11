<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dependencias', function (Blueprint $table) {
            
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            
            $table->unsignedBigInteger('grado_id')->change();
            $table->foreign('grado_id')->references('id')->on('grado_dependencias');

            
            $table->unsignedBigInteger('nivel_id')->change();
            $table->foreign('nivel_id')->references('id')->on('nivel_dependencias');
            
            $table->unsignedBigInteger('dependenciaservicio_id')->change();
            $table->foreign('dependenciaservicio_id')->references('id')->on('dependencia_servicios');
            
            $table->unsignedBigInteger('dependenciaserviciosubtipo_id')->change();
            $table->foreign('dependenciaserviciosubtipo_id')->references('id')->on('dependencia_servicio_subtipos');
            
            $table->unsignedBigInteger('prestaciondependencia_id')->change();
            $table->foreign('prestaciondependencia_id')->references('id')->on('prestacion_dependencias');
        });
    }
};
