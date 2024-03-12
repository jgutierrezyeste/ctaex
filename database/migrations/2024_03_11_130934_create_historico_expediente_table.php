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
        Schema::create('historico_expediente', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->id();
            $table->unsignedBigInteger('expediente_id')->nullable()->default(null);
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            $table->text('nombre')->nullable()->default(null);
            $table->unsignedBigInteger('regimen_id')->nullable()->default(null);
            $table->foreign('regimen_id')->references('id')->on('regimenes');
            $table->text('observaciones')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_expediente');
    }
};