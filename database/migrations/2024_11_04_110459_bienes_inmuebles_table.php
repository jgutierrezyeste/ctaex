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
        Schema::create('bienes_inmuebles', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('expediente_id')->default(null)->nullable();
            $table->foreign('expediente_id')->references('id')->on('expedientes_intranet');
            $table->unsignedBigInteger('tipo_id')->default(null)->nullable();
            $table->foreign('tipo_id')->references('id')->on('tipo_inmuebles');
            $table->text('localidad')->default(null)->nullable();
            $table->text('codigo_postal')->default(null)->nullable();
            $table->text('direccion')->default(null)->nullable();
            $table->text('observaciones')->default(null)->nullable();
            $table->unsignedBigInteger('is_deleted')->default('2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bienes_inmuebles');

    }
};
