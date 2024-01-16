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
        Schema::table('resoluciones', function (Blueprint $table) {
            $table->renameColumn('procedimiento_resolucion_id','tipo_resolucion_id');
            $table->bigInteger('modo_resolucion_id')->nullable()->default()->after('procedimiento_resolucion_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resoluciones', function (Blueprint $table) {
            $table->renameColumn('tipo_resolucion_id','procedimiento_resolucion_id');
            $table->dropColumn('modo_resolucion_id');
        });
    }
};
