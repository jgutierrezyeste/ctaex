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
        Schema::create('polizas_decesos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('aseguradora_id')->nullable()->default(null);
            $table->bigInteger('carpeta_id')->nullable()->default(null);
            $table->text('numero_poliza')->nullable()->default(null);
            $table->boolean('disponible')->nullable()->default(null);
            $table->text('motivo')->nullable()->default(null);
            $table->text('observaciones')->nullable()->default(null);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polizas_decesos');
    }
};
