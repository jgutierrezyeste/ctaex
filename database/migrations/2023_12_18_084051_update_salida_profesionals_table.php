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
        Schema::rename('salida_profesionals','salida_profesionales');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('salida_profesionales','salida_profesionals');
    }
};
