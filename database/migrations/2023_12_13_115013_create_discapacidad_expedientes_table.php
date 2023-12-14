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
        Schema::create('discapacidad_expedientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expediente_id')->nullable()->default(null);
            $table->integer('grado_discapacidad')->nullable()->default(null);
            $table->date('fecha_discapacidad')->nullable()->default(null);
            $table->date('fecha_valor_discapacidad')->nullable()->default(null);
            $table->text('estado')->nullable()->default(null);
            $table->date('fecha_revision_discapacidad')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discapacidad_expedientes');
    }
};
