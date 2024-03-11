<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rendiciones_anuales_declaraciones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('rendicion_anual_id')->change();
            $table->foreign('rendicion_anual_id')->references('id')->on('rendiciones_anuales');

            $table->unsignedBigInteger('declaracion_id')->change();
            $table->foreign('declaracion_id')->references('id')->on('declaraciones');
            
            
        });
    }
};
