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
        
            Schema::dropIfExists('situaciones');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('situaciones', function (Blueprint $table) {
            $table->id();
            $table->string('situacion',255);
            $table->timestamps();
        });
    }
};
