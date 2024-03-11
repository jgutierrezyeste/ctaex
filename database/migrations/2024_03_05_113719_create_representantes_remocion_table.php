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
        Schema::create('representantes_remocion', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->id();
            $table->unsignedBigInteger('remocion_id')->nullable()->default(null);
            $table->foreign('remocion_id')->references('id')->on('remociones');
            $table->unsignedBigInteger('representante_id')->nullable()->default(null);
            $table->foreign('representante_id')->references('id')->on('representantes');
            $table->unsignedBigInteger('relacion_id')->nullable()->default(null);
            $table->foreign('relacion_id')->references('id')->on('relaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representantes_remocion');
    }
};
