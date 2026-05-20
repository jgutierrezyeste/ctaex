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
        Schema::create('expediente_representantes', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('expediente_id')->default(null)->nullable();
            $table->foreign('expediente_id')->references('id')->on('expedientes_intranet');
            $table->unsignedBigInteger('representante_id')->default(null)->nullable();
            $table->foreign('representante_id')->references('id')->on('representantes');
            $table->unsignedBigInteger('relacion_id')->default(null)->nullable();
            $table->foreign('relacion_id')->references('id')->on('relaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expediente_representantes');
    }
};
