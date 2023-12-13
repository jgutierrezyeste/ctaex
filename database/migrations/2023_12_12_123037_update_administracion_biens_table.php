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
        Schema::table('administracion_biens', function (Blueprint $table) {
            $table->bigInteger('motivo_id')->after('motivo')->nullable()->default(null);
            $table->bigInteger('expediente_id')->after('expte')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administracion_biens', function (Blueprint $table) {
            $table->dropColumn('motivo_id');
            $table->dropColumn('expediente_id');
        });
    }
};
