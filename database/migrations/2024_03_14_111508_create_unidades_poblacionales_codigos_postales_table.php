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
        Schema::create('unidades_poblacionales_codigos_postales', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('codigo_postal_id')->default(null)->nullable();
            $table->foreign('codigo_postal_id')->references('id')->on('codigos_postales');
            $table->unsignedBigInteger('unidad_poblacional_id')->default(null)->nullable();
            $table->foreign('unidad_poblacional_id','up_cp_unidad_poblacional_id_foreign')->references('id')->on('unidades_poblacionales');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_poblacionales_codigos_postales');
    }
};
