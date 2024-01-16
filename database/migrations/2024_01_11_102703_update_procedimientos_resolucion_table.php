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
        Schema::rename('procedimientos_resolucion','tipos_resolucion');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('tipos_resolucion','procedimientos_resolucion');
    }
};
