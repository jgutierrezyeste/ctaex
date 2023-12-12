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
        Schema::table('expediente_area_ecca_empleado', function (Blueprint $table) {
            $table->string('tipo_empleado')->after('area_ecca_empleado_id')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_area_ecca_empleado', function (Blueprint $table) {
            $table->dropColumn('tipo_empleado');
        });
    }
};
