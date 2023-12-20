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
        Schema::create('rendiciones_finales', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_fallecimiento')->nullable()->default(null);
            $table->date('fecha_certificado_defuncion')->nullable()->default(null);
            $table->date('fecha_solicitud_ultimas_voluntades')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendiciones_finales');
    }
};
