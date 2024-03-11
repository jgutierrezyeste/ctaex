<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('expediente_entidad_bancaria', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            
            $table->unsignedBigInteger('entidad_bancaria_id')->change();
            $table->foreign('entidad_bancaria_id')->references('id')->on('entidad_bancarias');

            
        });
    }
};
