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
        Schema::create('salida_profesionals', function (Blueprint $table) {
            $table->id();
            $table->integer('profesionales')->nullable()->default(null);
            $table->integer('puesto')->nullable()->default(null);
            $table->date('fecha_salida')->nullable()->default(null);
            $table->string('lugar_desplazamiento',255)->nullable()->default(null);
            $table->string('motivo',255)->nullable()->default(null);
            $table->time('hora_salida')->nullable()->default(null);
            $table->time('hora_llegada')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salida_profesionals');
    }
};
