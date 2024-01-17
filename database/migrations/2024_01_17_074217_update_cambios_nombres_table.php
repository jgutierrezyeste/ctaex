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
        /*renombro tabla administracion_biens*/
        Schema::rename('administracion_biens','administracion_bienes');
        /*renombramos campos de la tabla expedientes*/
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('seguro_medico_id','aseguradora_id');
            $table->renameColumn('sanitario_id','seguro_medico_id'); 
            $table->renameColumn('compañia','aseguradora'); 
            $table->renameColumn('documentoidentificativo_id','documento_identificativo_id'); 
            $table->renameColumn('otra_asistencia_sanitaria','seguro_medico'); 
            

        });
        /*renombramos campo aseguradora de la tabla aseguradoras*/
        Schema::table('aseguradoras', function (Blueprint $table) {
            $table->renameColumn('aseguradora','nombre');
        });
        /*renombro tabla documento_identificativos*/
        Schema::rename('documento_identificativos','documentos_identificativos');


       


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('administracion_bienes','administracion_biens');
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('aseguradora','seguro_medico_id');
            $table->renameColumn('seguro_medico_id','sanitario_id');
            $table->renameColumn('aseguradora','compañia'); 
            $table->renameColumn('documento_identificativo_id','documentoidentificativo_id'); 
            $table->renameColumn('seguro_medico','otra_asistencia_sanitaria'); 
        });
        Schema::table('aseguradoras', function (Blueprint $table) {
            $table->renameColumn('nombre','aseguradora');
        });
        Schema::rename('documentos_identificativos','documento_identificativos');
    }
};
