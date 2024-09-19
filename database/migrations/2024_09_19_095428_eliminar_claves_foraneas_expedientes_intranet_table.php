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
        Schema::table('expedientes_intranet', function (Blueprint $table) {
            
            $table->dropForeign('expedientes_dependenciaservicio_id_foreign');
            $table->dropIndex('expedientes_dependenciaservicio_id_foreign');
            $table->dropForeign('expedientes_dependenciaserviciosubtipo_id_foreign');
            $table->dropIndex('expedientes_dependenciaserviciosubtipo_id_foreign');
                   
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
