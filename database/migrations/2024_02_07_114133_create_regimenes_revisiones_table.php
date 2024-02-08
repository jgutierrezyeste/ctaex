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
        Schema::create('regimenes_revisiones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('regimen_id')->nullable()->default(null);
            $table->bigInteger('revision_id')->nullable()->default(null);
            $table->bigInteger('tipo_regimen_id')->nullable()->default(null);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regimenes_revisiones');
    }
};
