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
            $table->BigInteger('tsasignado_id')->after('ts_asignado')->nullable()->default(null);
            $table->renameColumn('fecha_revision_discpacidad','fecha_revision_discapacidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->dropColumn('tsasignado_id');
            $table->renameColumn('fecha_revision_discapacidad','fecha_revision_discpacidad');

        });
    }
};
