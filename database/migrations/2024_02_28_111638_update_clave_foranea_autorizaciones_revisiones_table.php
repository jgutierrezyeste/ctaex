<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('autorizaciones_revisiones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('revision_id')->change();
            $table->foreign('revision_id')->references('id')->on('revisiones');

            $table->unsignedBigInteger('autorizacion_id')->change();
            $table->foreign('autorizacion_id')->references('id')->on('autorizaciones');

            $table->unsignedBigInteger('opcion_autorizacion_id')->change();
            $table->foreign('opcion_autorizacion_id')->references('id')->on('opciones_autorizacion');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
