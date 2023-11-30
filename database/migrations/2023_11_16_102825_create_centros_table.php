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
        Schema::create('centros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_centro',255);
            $table->string('tipo_via',255)->nullable()->default(null);
            $table->string('direccion',255)->nullable()->default(null);
            $table->string('numero',255)->nullable()->default(null);
            $table->string('planta',255)->nullable()->default(null);
            $table->string('letra',255)->nullable()->default(null);
            $table->string('poblacion',255)->nullable()->default(null);
            $table->string('provincia',255)->nullable()->default(null);
            $table->string('codigo_postal',255)->nullable()->default(null);
            $table->string('telefono',255)->nullable()->default(null);
            $table->string('telefono2',255)->nullable()->default(null);
            $table->string('fax',255)->nullable()->default(null);
            $table->string('fax2',255)->nullable()->default(null);
            $table->string('correo_electronico',255)->nullable()->default(null);
            $table->string('observaciones',255)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros');
    }
};
