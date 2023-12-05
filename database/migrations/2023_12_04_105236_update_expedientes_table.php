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
        Schema::table('expedientes', function (Blueprint $table) {
            $table->BigInteger('regimen_id')->after('regimen')->nullable()->default(null);
            $table->BigInteger('situacion_id')->after('situacion')->nullable()->default(null);
            $table->BigInteger('sexo_id')->after('sexo')->nullable()->default(null);
            $table->BigInteger('nacionalidad_id')->after('nacionalidad')->nullable()->default(null);
            $table->BigInteger('documentoidentificativo_id')->after('documento')->nullable()->default(null);
            $table->BigInteger('sanitario_id')->after('otra_asistencia_sanitaria')->nullable()->default(null);
            $table->BigInteger('patologiageneral_id')->after('patologia_general')->nullable()->default(null);
            $table->BigInteger('centro_id')->after('domicilio')->nullable()->default(null);
            $table->BigInteger('declaracion_id')->after('declaracion_anual')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            //
        });
    }
};
