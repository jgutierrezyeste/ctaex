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
            $table->renameColumn('correro_electronico','correo_electronico');
            $table->date('fecha_alta')->nullable()->default(null)->after('trabajador_social_id');
            $table->text('observaciones')->default(null)->nullable()->after('año');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('correo_electronico','correro_electronico');
            $table->dropColumn('fecha_alta');
            $table->dropColumn('observaciones');
        });
    }
};
