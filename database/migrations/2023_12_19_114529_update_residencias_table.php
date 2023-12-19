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
        Schema::table('residencias', function (Blueprint $table) {
            $table->renameColumn('direccion_residencia','direccion');
        });

        Schema::rename('residencias','domicilios');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('residencias', function (Blueprint $table) {
            $table->renameColumn('direccion','direccion_residencia');

        });
        Schema::rename('domicilios','residencias');
    }
};
