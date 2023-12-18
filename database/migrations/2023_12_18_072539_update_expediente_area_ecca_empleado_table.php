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
           $table->renameColumn('area_ecca_empleado_id','empleado_id'); 
        });

        Schema::rename('expediente_area_ecca_empleado','expediente_empleado');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_area_ecca_empleado', function (Blueprint $table) {
            $table->renameColumn('empleado_id','area_ecca_empleado_id'); 
        });

        Schema::rename('expediente_empleado','expediente_area_ecca_empleado');
    }
};
