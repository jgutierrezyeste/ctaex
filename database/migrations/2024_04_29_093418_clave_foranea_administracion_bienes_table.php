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
        Schema::table('administracion_bienes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->change();

            $table->foreign('expediente_id')->references('id')->on('expedientes');

            $table->unsignedBigInteger('motivo_cancelacion_id')->change();

            $table->foreign('motivo_cancelacion_id')->references('id')->on('motivos');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administracion_bienes', function (Blueprint $table) {
            
            $table->dropForeign('administracion_bienes_expediente_id_foreign');
            $table->dropIndex('administracion_bienes_expediente_id_foreign');
            $table->dropForeign('administracion_bienes_motivo_cancelacion_id_foreign');
            $table->dropIndex('administracion_bienes_motivo_cancelacion_id_foreign');
            
        });
    }
};
