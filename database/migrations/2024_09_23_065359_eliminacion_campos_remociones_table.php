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
        Schema::table('remociones', function (Blueprint $table) {
            $table->dropColumn('expte');
            $table->dropColumn('apellidos');  
            $table->dropColumn('nombre');  
            $table->dropColumn('a_favor_de');  
            $table->dropColumn('apellidos_neo');  
            $table->dropColumn('nombre_neo');  

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
