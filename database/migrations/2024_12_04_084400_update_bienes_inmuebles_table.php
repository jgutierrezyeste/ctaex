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
        Schema::table('bienes_inmuebles', function (Blueprint $table) { 
            $table->unsignedBigInteger('tipo_via_id')->default(null)->nullable()->after('codigo_postal');
            $table->foreign('tipo_via_id')->references('id')->on('tipos_via');
            $table->text('numero')->nullable()->default(null)->after('direccion');
            $table->text('planta')->nullable()->default(null)->after('numero');
            $table->text('letra')->nullable()->default(null)->after('planta');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bienes_inmuebles', function (Blueprint $table) { 
            $table->dropColumn('tipo_via_id');
            $table->dropColumn('numero');
            $table->dropColumn('planta');
            $table->dropColumn('letra');            

        });
    }
};
