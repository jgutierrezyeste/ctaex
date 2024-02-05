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
        Schema::table('centros', function (Blueprint $table) {
            $table->renameColumn('nombre_centro','nombre');
        });
        Schema::table('dependencia_servicio_subtipos', function (Blueprint $table) {
            $table->renameColumn('servicio_subtipo','nombre');
        });
        Schema::table('dependencia_servicios', function (Blueprint $table) {
            $table->renameColumn('servicio','nombre');
        });
        Schema::table('documentos_identificativos', function (Blueprint $table) {
            $table->renameColumn('tipo_documento','tipo');
        });
        Schema::table('entidad_bancarias', function (Blueprint $table) {
            $table->renameColumn('entidad','nombre');
        });
        Schema::table('letrados', function (Blueprint $table) {
            $table->renameColumn('letrado','nombre');
        });
        Schema::table('motivos', function (Blueprint $table) {
            $table->renameColumn('motivo','nombre');
        });
        Schema::table('nacionalidades', function (Blueprint $table) {
            $table->renameColumn('nacionalidad','nombre');
        });
        Schema::table('parentescos', function (Blueprint $table) {
            $table->renameColumn('parentesco','nombre');
        });
        Schema::table('prestacion_dependencias', function (Blueprint $table) {
            $table->renameColumn('prestacion_dependencia','nombre');
        });
        Schema::table('prestaciones', function (Blueprint $table) {
            $table->renameColumn('prestacion','nombre');
        });
        Schema::table('procedimientos_judiciales', function (Blueprint $table) {
            $table->renameColumn('procedimiento','nombre');
            $table->renameColumn('codificacion','abreviatura');
        });
        Schema::table('sexos', function (Blueprint $table) {
            $table->renameColumn('sexo','nombre');
        });
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('estado_expediente_id','estado_id');
            $table->renameColumn('apellido','apellido1');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('centros', function (Blueprint $table) {
            $table->renameColumn('nombre','nombre_centro');
        });
        Schema::table('dependencia_servicio_subtipos', function (Blueprint $table) {
            $table->renameColumn('nombre','servicio_subtipo');
        });
        Schema::table('dependencia_servicios', function (Blueprint $table) {
            $table->renameColumn('nombre','servicio');
        });
        Schema::table('documentos_identificativos', function (Blueprint $table) {
            $table->renameColumn('tipo','tipo_documento');
        });
        Schema::table('entidad_bancarias', function (Blueprint $table) {
            $table->renameColumn('nombre','entidad');
        });
        Schema::table('letrados', function (Blueprint $table) {
            $table->renameColumn('nombre','letrado');
        });
        Schema::table('motivos', function (Blueprint $table) {
            $table->renameColumn('nombre','motivo');
        });
        Schema::table('nacionalidades', function (Blueprint $table) {
            $table->renameColumn('nombre','nacionalidad');
        });
        Schema::table('parentescos', function (Blueprint $table) {
            $table->renameColumn('nombre','parentesco');
        });
        Schema::table('prestacion_dependencias', function (Blueprint $table) {
            $table->renameColumn('nombre','prestacion_dependencia');
        });
        Schema::table('prestaciones', function (Blueprint $table) {
            $table->renameColumn('nombre','prestacion');
        });
        Schema::table('procedimientos_judiciales', function (Blueprint $table) {
            $table->renameColumn('nombre','procedimiento');
            $table->renameColumn('abreviatura','codificacion');
        });
        Schema::table('sexos', function (Blueprint $table) {
            $table->renameColumn('nombre','sexo');
        });
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('estado_id','estado_expediente_id');
            $table->renameColumn('apellido1','apellido');
        });
        
    }
};