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
        Schema::table('expedientes', function (Blueprint $table) {
            $table->BigInteger('aseguradora_id')->after('compañia')->nullable()->default(null);
            $table->BigInteger('gradodependencia_id')->after('grado_dependencia')->nullable()->default(null);
            $table->BigInteger('dependenciaservicio_id')->after('servicio_dependencia')->nullable()->default(null);
            $table->BigInteger('dependenciaserviciosubtipo_id')->after('subtipo_servicio')->nullable()->default(null);
            $table->BigInteger('prestaciondependencia_id')->after('prestacion_dependencia')->nullable()->default(null);
            $table->BigInteger('niveldependencia_id')->after('nivel_dependencia')->nullable()->default(null);
            $table->BigInteger('procedimientojudicial_id')->after('procedimiento_judicial')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->dropColumn('aseguradora_id');
            $table->dropColumn('gradodependencia_id');
            $table->dropColumn('dependenciaservicio_id');
            $table->dropColumn('dependenciaserviciosubtipo_id');
            $table->dropColumn('prestaciondependencia_id');
            $table->dropColumn('niveldependencia_id');
            $table->dropColumn('procedimientojudicial_id');
            
        });
    }
};
