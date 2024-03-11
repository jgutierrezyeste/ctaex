<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('trabajador_social_id')->change();
            $table->foreign('trabajador_social_id')->references('id')->on('trabajadores_sociales');
            
            $table->unsignedBigInteger('estado_id')->change();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->unsignedBigInteger('sexo_id')->change();
            $table->foreign('sexo_id')->references('id')->on('sexos');
            
            /*$table->unsignedBigInteger('nacionalidad_id')->change();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            */
            $table->unsignedBigInteger('documento_identificativo_id')->change();
            $table->foreign('documento_identificativo_id')->references('id')->on('documentos_identificativos');
            
            $table->unsignedBigInteger('seguro_medico_id')->change();
            $table->foreign('seguro_medico_id')->references('id')->on('seguros_medicos');
            
            $table->unsignedBigInteger('patologiageneral_id')->change();
            $table->foreign('patologiageneral_id')->references('id')->on('patologia_general');
            
            $table->unsignedBigInteger('centro_id')->change();
            $table->foreign('centro_id')->references('id')->on('centros');
            
            $table->unsignedBigInteger('domicilio_id')->change();
            $table->foreign('domicilio_id')->references('id')->on('domicilios');
            
            $table->unsignedBigInteger('juzgado_id')->change();
            $table->foreign('juzgado_id')->references('id')->on('juzgados');
            
            $table->unsignedBigInteger('poliza_deceso_id')->change();
            $table->foreign('poliza_deceso_id')->references('id')->on('polizas_decesos');
            
            $table->unsignedBigInteger('aseguradora_id')->change();
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras');
            
            $table->unsignedBigInteger('dependenciaservicio_id')->change();
            $table->foreign('dependenciaservicio_id')->references('id')->on('dependencia_servicios');

            
            $table->unsignedBigInteger('dependenciaserviciosubtipo_id')->change();
            $table->foreign('dependenciaserviciosubtipo_id')->references('id')->on('dependencia_servicio_subtipos');
            
            $table->unsignedBigInteger('procedimientojudicial_id')->change();
            $table->foreign('procedimientojudicial_id')->references('id')->on('procedimientos_judiciales');
            
        });
    }
};
