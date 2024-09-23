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
            
            $table->dropForeign('expedientes_patologiageneral_id_foreign');
            $table->dropIndex('expedientes_patologiageneral_id_foreign');
        });

        Schema::table('patologia_concreta', function (Blueprint $table) {
            
            $table->dropForeign('patologia_concreta_patologia_general_id_foreign');
            $table->dropIndex('patologia_concreta_patologia_general_id_foreign');
            $table->dropColumn('patologia_general_id');
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
