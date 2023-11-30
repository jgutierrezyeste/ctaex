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
        Schema::create('reintegros', function (Blueprint $table) {
            $table->id();
            $table->string('expte',255)->require;
            $table->string('regimen',255)->nullable()->default(null);
            $table->string('apellidos',255)->nullable()->default(null);
            $table->string('nombre',255)->nullable()->default(null);
            $table->string('juzgado',255)->nullable()->default(null);
            $table->string('figura',255)->nullable()->default(null);
            $table->string('numero',255)->nullable()->default(null);
            $table->string('año',255)->nullable()->default(null);
            $table->date('fecha_reintegro')->nullable()->default(null);
            $table->date('fecha_baja_ctaex')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reintegros');
    }
};
