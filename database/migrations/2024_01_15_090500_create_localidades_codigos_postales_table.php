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
        Schema::create('localidades_codigos_postales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('codigo_postal_id')->nullable()->default();
            $table->bigInteger('localidad_id')->nullable()->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localidades_codigos_postales');
    }
};
