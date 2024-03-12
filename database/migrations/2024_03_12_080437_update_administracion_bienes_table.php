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
        Schema::table('administracion_bienes', function (Blueprint $table) {
            $table->dropColumn('expte');
            $table->dropColumn('apellidos');
            $table->dropColumn('nombre');
            $table->dropColumn('estado');
            $table->dropColumn('motivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
