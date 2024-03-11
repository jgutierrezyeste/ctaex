<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('restituciones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');

            $table->unsignedBigInteger('regimen_id')->change();
            $table->foreign('regimen_id')->references('id')->on('regimenes');
            
            $table->unsignedBigInteger('juzgado_id')->change();
            $table->foreign('juzgado_id')->references('id')->on('juzgados');

            $table->unsignedBigInteger('figura_id')->change();
            $table->foreign('figura_id')->references('id')->on('figuras');

            $table->unsignedBigInteger('año_id')->change();
            $table->foreign('año_id')->references('id')->on('años');
            
            $table->unsignedBigInteger('tipo_restitucion_id')->change();
            $table->foreign('tipo_restitucion_id')->references('id')->on('tipo_restitucion');
        });
    }
};
