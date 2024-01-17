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
        Schema::dropIfExists('coches');
        Schema::dropIfExists('comparecencia_datos');
        Schema::dropIfExists('comparecencias');
        Schema::dropIfExists('ctaex_representantes');
        Schema::dropIfExists('indices');
        Schema::dropIfExists('instruccion_juzgados');
        Schema::dropIfExists('penal_juzgados');
        Schema::dropIfExists('profesionales');
        Schema::dropIfExists('puestos');
        Schema::dropIfExists('salidas_profesionales');
        Schema::dropIfExists('trabajos');


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
