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
            $table->unsignedBigInteger('prestacion_dependencia_servicio_id')->after('dependenciaservicio_id')->default(null)->nullable();
            $table->unsignedBigInteger('prestacion_dependencia_economica_id')->after('dependenciaserviciosubtipo_id')->default(null)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('dependencias', function (Blueprint $table) { 
            $table->dropColumn('prestacion_dependencia_servicio_id');
            $table->dropColumn('prestacion_dependencia_economica_id');

        });
    }
};
