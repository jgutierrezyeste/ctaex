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
            
            $table->unsignedBigInteger('estado_id')->change();
            
            $table->foreign('estado_id')->references('id')->on('estados');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::table('administracion_bienes', function (Blueprint $table) {
            $table->dropForeign('administracion_bienes_estado_id_foreign');
        });
    }
};
