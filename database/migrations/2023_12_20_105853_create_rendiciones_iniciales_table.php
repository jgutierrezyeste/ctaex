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
        Schema::create('rendiciones_iniciales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rendicion_id')->nullable()->default(null);
            $table->date('fecha_aceptacion_cargo')->nullable()->default(null);
            $table->date('fecha_entrada')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendiciones_iniciales');
    }
};
