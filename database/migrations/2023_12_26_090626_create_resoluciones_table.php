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
        Schema::create('resoluciones', function (Blueprint $table) {
            $table->id();
            $table->text('numero')->nullable()->default(null);
            $table->date('fecha')->nullable()->default(null);
            $table->bigInteger('juzgado_id')->nullable()->default(null);
            $table->bigInteger('procedimiento_resolucion_id')->nullable()->defautl(null);
            $table->bigInteger('expediente_id')->nullable()->defautl(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resoluciones');
    }
};
