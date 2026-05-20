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
        Schema::create('expediente_bienes_inmuebles', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('expediente_id')->default(null)->nullable();
            $table->foreign('expediente_id')->references('id')->on('expedientes_intranet');
            $table->unsignedBigInteger('inmueble_id')->default(null)->nullable();
            $table->foreign('inmueble_id')->references('id')->on('bienes_inmuebles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expediente_bienes_inmuebles');
    }
};
