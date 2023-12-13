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
        Schema::table('salida_profesionals', function (Blueprint $table) {
            $table->renameColumn('profesionales','profesional_id');
            $table->renameColumn('puesto','puesto_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salida_profesionals', function (Blueprint $table) {
            $table->renameColumn('profesional_id','profesionales');
            $table->renameColumn('puesto_id','puesto');
        });
    }
};
