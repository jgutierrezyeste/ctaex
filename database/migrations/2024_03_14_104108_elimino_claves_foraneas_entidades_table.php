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
        Schema::table('entidades', function (Blueprint $table) {
            
            $table->dropForeign('entidades_municipio_id_foreign');
            $table->dropIndex('entidades_municipio_id_foreign');
            $table->dropForeign('entidades_provincia_id_foreign');
            $table->dropIndex('entidades_provincia_id_foreign');
           
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
