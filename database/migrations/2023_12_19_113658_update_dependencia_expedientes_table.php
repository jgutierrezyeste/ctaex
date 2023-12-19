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
        Schema::table('dependencia_expedientes', function (Blueprint $table) {
            $table->renameColumn('grado_dependencia_id','grado_id');
            $table->renameColumn('nivel_dependencia_id','nivel_id');
            $table->renameColumn('fecha_efectos','fecha_efecto');
            $table->renameColumn('activo','activa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dependencia_expedientes', function (Blueprint $table) {
            $table->renameColumn('grado_id','grado_dependencia_id');
            $table->renameColumn('nivel_id','nivel_dependencia_id');
            $table->renameColumn('fecha_efecto','fecha_efectos');
            $table->renameColumn('activa','activo');
          
        });
    }
};
