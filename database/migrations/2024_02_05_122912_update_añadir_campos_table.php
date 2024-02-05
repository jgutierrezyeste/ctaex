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
        Schema::table('domicilios', function (Blueprint $table) {
            $table->BigInteger('expediente_id')->after('id')->nullable()->default(null);
        });

        Schema::table('letrados', function (Blueprint $table) {
            $table->text('apellido1')->after('nombre')->nullable()->default(null);
            $table->text('apellido2')->after('apellido1')->nullable()->default(null);
        });

        Schema::table('expedientes', function (Blueprint $table) {
            $table->BigInteger('apellido2')->after('apellido1')->nullable()->default(null);
        });

        Schema::table('judiciales_defensas', function (Blueprint $table) {
            $table->BigInteger('sexo_id')->after('motivo_id')->nullable()->default(null);
            $table->BigInteger('estado_id')->after('sexo_id')->nullable()->default(null);
        });

        Schema::table('reintegros', function (Blueprint $table) {
            $table->BigInteger('tipo_restitucion_id')->after('año_id')->nullable()->default(null);
            $table->BigInteger('expediente_id')->after('id')->nullable()->default(null);
            $table->renameColumn('fecha_reintegro','fecha_restitucion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('domicilios', function (Blueprint $table) {
            $table->dropColumn('expediente_id');
        });

        Schema::table('letrados', function (Blueprint $table) {
            $table->dropColumn('apellido1');
            $table->dropColumn('apellido2');
        });

        Schema::table('expedientes', function (Blueprint $table) {
            $table->dropColumn('apellido2');
        });

        Schema::table('judiciales_defensas', function (Blueprint $table) {
            $table->dropColumn('sexo_id');
            $table->dropColumn('estado_id');
        });

        Schema::table('reintegros', function (Blueprint $table) {
            $table->dropColumn('tipo_restitucion');
            $table->dropColumn('expediente_id');
            $table->renameColumn('fecha_restitucion','fecha_reintegro');
        });
    }
};
