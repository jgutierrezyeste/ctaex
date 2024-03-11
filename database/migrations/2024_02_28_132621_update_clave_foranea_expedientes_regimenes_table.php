<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('expedientes_regimenes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            $table->unsignedBigInteger('regimen_id')->change();
            $table->foreign('regimen_id')->references('id')->on('regimenes');
            $table->unsignedBigInteger('tipo_regimen_id')->change();
            $table->foreign('tipo_regimen_id')->references('id')->on('tipos_regimen');
            
            
        });
    }
};
