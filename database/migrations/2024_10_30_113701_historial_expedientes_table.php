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
        Schema::create('historial_expedientes', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('expediente_id')->default(null)->nullable();
            $table->foreign('expediente_id')->references('id')->on('expedientes_intranet');
            $table->date('fecha_suceso')->default(null)->nullable();
            $table->text('descripcion')->default(null)->nullable();
            $table->unsignedBigInteger('is_deleted')->default('2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_expedientes');
    }
};
