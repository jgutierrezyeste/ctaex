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
        Schema::create('expediente_prestacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expediente_id')->nullable()->default(null);
            $table->bigInteger('prestacion_id')->nullable()->default(null);
            $table->text('año')->nullable()->default(null);
            $table->float('importe')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expediente_prestacion');
    }
};
