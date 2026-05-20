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
        Schema::table('juzgados', function (Blueprint $table) { 
            $table->unsignedBigInteger('tipo_via_id')->default(null)->nullable()->after('nombre');
            $table->foreign('tipo_via_id')->references('id')->on('tipos_via');
            $table->text('direccion')->nullable()->default(null)->after('tipo_via_id');
            $table->text('numero')->nullable()->default(null)->after('direccion');
            $table->text('planta')->nullable()->default(null)->after('numero');
            $table->text('letra')->nullable()->default(null)->after('planta');
            $table->text('localidad')->nullable()->default(null)->after('letra');
            $table->unsignedBigInteger('provincia_id')->default(null)->nullable()->after('localidad');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->text('codigo_postal')->nullable()->default(null)->after('provincia_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('juzgados', function (Blueprint $table) { 

            $table->dropColumn('tipo_via_id');
            $table->dropColumn('direccion');
            $table->dropColumn('numero');
            $table->dropColumn('planta');
            $table->dropColumn('letra');
            $table->dropColumn('localidad');
            $table->dropColumn('provincia_id');
            $table->dropColumn('codigo_postal');
        });
    }
};
