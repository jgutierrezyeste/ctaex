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
        Schema::table('administracion_bienes', function (Blueprint $table) {
            $table->bigInteger('estado_id')->after('estado')->nullable()->default(null);
        });

        Schema::table('expedientes_regimenes', function (Blueprint $table) {
            $table->bigInteger('tipo_regimen_id')->after('regimen_id')->nullable()->default(null);
            $table->dropColumn('tipo');
        });

        Schema::table('remociones', function (Blueprint $table) {
            $table->bigInteger('familiar_id')->after('parentesco_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administracion_bienes', function (Blueprint $table) {
            $table->dropColumn('estado_id');

        });

        Schema::table('expedientes_regimenes', function (Blueprint $table) {
            
            $table->dropColumn('tipo_regimen_id');
        });

        Schema::table('remociones', function (Blueprint $table) {
            $table->dropColumn('familiar_id');

        });
    }
};
