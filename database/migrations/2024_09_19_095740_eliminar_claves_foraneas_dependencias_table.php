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
        Schema::table('dependencias', function (Blueprint $table) {
            
            $table->dropForeign('dependencias_dependenciaservicio_id_foreign');
            $table->dropIndex('dependencias_dependenciaservicio_id_foreign');
            $table->dropForeign('dependencias_dependenciaserviciosubtipo_id_foreign');
            $table->dropIndex('dependencias_dependenciaserviciosubtipo_id_foreign');

            
                   
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
