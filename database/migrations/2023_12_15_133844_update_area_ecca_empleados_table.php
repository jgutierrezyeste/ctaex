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
        Schema::table('area_ecca_empleados', function (Blueprint $table) {
            $table->renameColumn('empleado','nombre');
        });

        Schema::rename('area_ecca_empleados','empleados');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('area_ecca_empleados', function (Blueprint $table) {
            $table->renameColumn('nombre','empleado');
        });

        Schema::rename('empleados','area_ecca_empleados');
    }
};
