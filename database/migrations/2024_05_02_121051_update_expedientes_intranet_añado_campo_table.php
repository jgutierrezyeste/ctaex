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
            
            $table->unsignedBigInteger('expediente_datos_personales_id')->nullable()->default(null)->after('id');

            $table->foreign('expediente_datos_personales_id')->references('id')->on('expediente_datos_personales');

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
