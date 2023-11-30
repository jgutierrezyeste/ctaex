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
        Schema::create('remocions', function (Blueprint $table) {
            $table->id();
            $table->string('expte',255)->nullable()->default(null);
            $table->string('apellidos',255)->nullable()->default(null);
            $table->string('nombre',255)->nullable()->default(null);
            $table->string('regimen',255)->nullable()->default(null);
            $table->date('fecha_acep_cargo')->nullable()->default(null);
            $table->date('fecha_remocion')->nullable()->default(null);
            $table->string('a_favor_de',255)->nullable()->default(null);
            $table->string('apellidos_neo',255)->nullable()->default(null);
            $table->string('nombre_neo',255)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remocions');
    }
};
