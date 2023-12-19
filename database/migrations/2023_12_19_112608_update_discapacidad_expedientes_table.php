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
        Schema::table('discapacidad_expedientes', function (Blueprint $table) {
            $table->renameColumn('grado_discapacidad','grado');
            $table->renameColumn('fecha_discapacidad','fecha_efecto');
            $table->renameColumn('fecha_valor_discapacidad','fecha_valoracion');
            $table->renameColumn('estado','is_revisable');
            $table->renameColumn('fecha_revision_discapacidad','fecha_revision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('discapacidad_expedientes', function (Blueprint $table) {
            $table->renameColumn('grado','grado_discapacidad');
            $table->renameColumn('fecha_efecto','fecha_discapacidad');
            $table->renameColumn('fecha_valoracion','fecha_valor_discapacidad');
            $table->renameColumn('is_revisable','estado');
            $table->renameColumn('fecha_revision','fecha_revision_discapacidad');
        });
    }
};
