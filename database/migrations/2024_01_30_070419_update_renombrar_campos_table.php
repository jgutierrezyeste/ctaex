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
        
        
        Schema::table('regimenes', function (Blueprint $table) {
            $table->renameColumn('regimen','nombre');
            $table->renameColumn('codigo_regimen','abreviatura'); 
         });
       
        Schema::table('expediente_regimen', function (Blueprint $table) {
            $table->renameColumn('tipo_regimen','tipo');
        });
       
        Schema::rename('expediente_regimen','expedientes_regimenes');
        Schema::table('opcion_revisions', function (Blueprint $table) {
            $table->renameColumn('opciones','nombre');
        });
        Schema::rename('opcion_revisions','opciones_revision');
        Schema::table('iniciador_procedimientos', function (Blueprint $table) {
            $table->renameColumn('iniciador','nombre');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('iniciador_procedimientos', function (Blueprint $table) {
            $table->renameColumn('nombre','iniciador');
        });
        Schema::rename('opciones_revision','opcion_revisions');
        Schema::table('opcion_revisions', function (Blueprint $table) {
            $table->renameColumn('nombre','opciones');
        });
        Schema::rename('expedientes_regimenes','expediente_regimen');
        Schema::table('expediente_regimen', function (Blueprint $table) {
            $table->renameColumn('tipo','tipo_regimen');
        });
        Schema::table('regimenes', function (Blueprint $table) {
            $table->renameColumn('nombre','regimen');
            $table->renameColumn('abriatura','codigo_regimen'); 
         });
    }
};
