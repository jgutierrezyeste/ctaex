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
        Schema::table('historico_expediente', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_regimen_id')->nullable()->default(null)->after('regimen_id');
            $table->foreign('tipo_regimen_id')->references('id')->on('tipos_regimen');
            
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
