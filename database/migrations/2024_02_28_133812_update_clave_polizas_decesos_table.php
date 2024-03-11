<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('polizas_decesos', function (Blueprint $table) {
            
            $table->unsignedBigInteger('aseguradora_id')->change();
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras');

            $table->unsignedBigInteger('carpeta_id')->change();
            $table->foreign('carpeta_id')->references('id')->on('carpeta_decesos');
            
        });
    }
};
