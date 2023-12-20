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
        Schema::rename('trabajores_sociales','trabajadores_sociales');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trabajores_sociales', function (Blueprint $table) {
            Schema::rename('trabajadores_sociales','trabajores_sociales');
        });
    }
};
