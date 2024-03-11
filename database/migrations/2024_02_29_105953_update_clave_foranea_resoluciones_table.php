<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('resoluciones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('juzgado_id')->change();
            $table->foreign('juzgado_id')->references('id')->on('juzgados');

            $table->unsignedBigInteger('figura_id')->change();
            $table->foreign('figura_id')->references('id')->on('figuras');
            
            $table->unsignedBigInteger('modo_resolucion_id')->change();
            $table->foreign('modo_resolucion_id')->references('id')->on('modos_resolucion');

            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
        });
    }
};
