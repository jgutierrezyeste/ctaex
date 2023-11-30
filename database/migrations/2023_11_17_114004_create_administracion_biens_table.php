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
        Schema::create('administracion_biens', function (Blueprint $table) {
            $table->id();
            $table->string('expte',255);
            $table->string('apellidos',255)->nullable()->default(null);
            $table->string('nombre',255)->nullable()->default(null);
            $table->date('fecha_aceptacion')->nullable()->dafault(null);
            $table->date('fecha_cancelacion')->nullable()->default(null);
            $table->string('situacion',255)->nullable()->default(null);
            $table->string('motivo',255)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administracion_biens');
    }
};
