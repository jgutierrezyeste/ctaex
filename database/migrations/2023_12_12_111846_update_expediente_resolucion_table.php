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
        Schema::table('expediente_resolucion', function (Blueprint $table) {
            $table->text('tipo_resolucion')->after('resolucion_id')->nullable()->default(null);
            $table->text('tipo')->after('tipo_resolucion')->nullable()->defalult(null);
            $table->integer('num_resolucion')->after('tipo')->nullable()->default(null);
            $table->date('fecha_dictado')->after('num_resolucion')->nullable()->default(null);
            $table->BigInteger('juzgado_dictado')->after('fecha_dictado')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_resolucion', function (Blueprint $table) {
            $table->dropColumn('tipo_resolucion');
            $table->dropColumn('tipo');
            $table->dropColumn('num_resolucion');
            $table->dropColumn('fecha_dictado');
            $table->dropColumn('juzgado_dictado');
        });
    }
};
