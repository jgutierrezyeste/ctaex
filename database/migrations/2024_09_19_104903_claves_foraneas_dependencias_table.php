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
        Schema::table('dependencias', function (Blueprint $table) {
            $table->foreign('prestacion_dependencia_servicio_id')->references('id')->on('prestacion_dependencias_servicios');
            $table->foreign('prestacion_dependencia_economica_id')->references('id')->on('prestacion_dependencias_economicas'); 
            $table->foreign('nivel_id')->references('id')->on('nivel_dependencias');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
