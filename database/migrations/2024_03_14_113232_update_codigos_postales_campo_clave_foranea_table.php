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
        Schema::table('codigos_postales', function (Blueprint $table) {
            $table->renameColumn('entidad_id','unidad_poblacional_id');
            $table->foreign('unidad_poblacional_id')->references('id')->on('unidades_poblacionales');
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
