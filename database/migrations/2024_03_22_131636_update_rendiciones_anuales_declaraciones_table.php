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
        Schema::table('rendiciones_anuales_declaraciones', function (Blueprint $table) {
            
            $table->dropColumn('tipo');
            $table->unsignedBigInteger('tipo_id')->default(null)->nullable()->after('declaracion_id');
            $table->foreign('tipo_id')->references('id')->on('tipos_rendicion_anual');
            
           
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
