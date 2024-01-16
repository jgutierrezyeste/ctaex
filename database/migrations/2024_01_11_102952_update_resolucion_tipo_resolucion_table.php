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
        Schema::dropIfExists('resolucion_tipo_resolucion');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('resolucion_tipo_resolucion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_resolucion_id')->nullable()->default();
            $table->bigInteger('resolucion_id')->nullable()->default();
            $table->timestamps();
        });
    }
};
