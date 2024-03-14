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
        Schema::table('codigos_postales', function (Blueprint $table) {
            
            $table->dropForeign('codigos_postales_entidad_id_foreign');
            $table->dropIndex('codigos_postales_entidad_id_foreign');
           
           
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
