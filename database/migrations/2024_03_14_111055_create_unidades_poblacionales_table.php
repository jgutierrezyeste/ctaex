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
        Schema::create('unidades_poblacionales', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->text('codigo')->default(null)->nullable();
            $table->text('nombre')->default(null)->nullable();

            $table->unsignedBigInteger('provincia_id')->default(null)->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->unsignedBigInteger('municipio_id')->default(null)->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_poblacionales');
    }
};
