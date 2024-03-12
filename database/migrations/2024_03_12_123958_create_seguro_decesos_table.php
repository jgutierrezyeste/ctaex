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
        Schema::create('seguro_decesos', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->charset ='utf8';
            $table->collation='utf8_general_ci';
            $table->id();
            $table->unsignedBigInteger('gestion_seguro_deceso_id')->nullable()->default(null);
            $table->foreign('gestion_seguro_deceso_id')->references('id')->on('gestion_seguros_decesos');
            $table->unsignedBigInteger('aseguradora_id')->nullable()->default(null);
            $table->foreign('aseguradora_id')->references('id')->on('aseguradoras');
            
            $table->text('poliza')->nullable()->default(null);
            $table->unsignedBigInteger('carpeta_deceso_id')->nullable()->default(null);
            $table->foreign('carpeta_deceso_id')->references('id')->on('carpeta_decesos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguro_decesos');
    }
};
