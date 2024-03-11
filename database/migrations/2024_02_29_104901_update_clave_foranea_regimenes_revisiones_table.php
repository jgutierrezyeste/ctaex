<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('regimenes_revisiones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('regimen_id')->change();
            $table->foreign('regimen_id')->references('id')->on('regimenes');

            $table->unsignedBigInteger('revision_id')->change();
            $table->foreign('revision_id')->references('id')->on('revisiones');
            
            $table->unsignedBigInteger('tipo_regimen_id')->change();
            $table->foreign('tipo_regimen_id')->references('id')->on('tipos_regimen');
        });
    }
};
