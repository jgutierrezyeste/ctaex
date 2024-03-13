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
            $table->renameColumn('motivo_id','motivo_cancelacion_id');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administracion_bienes', function (Blueprint $table) {
            $table->renameColumn('motivo_cancelacion_id','motivo');
            
        });
    }
};
