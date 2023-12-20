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
            $table->dropColumn('telefono');
            $table->dropColumn('telefono2');
            $table->dropColumn('fax');
            $table->dropColumn('correo_electronico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('domicilios', function (Blueprint $table) {
            $table->string('telefono',255)->nullable()->default(null);
            $table->string('telefono2',255)->nullable()->default(null);
            $table->string('fax',255)->nullable()->default(null);
            $table->string('correo_electronico',255)->nullable()->default(null);
        });
    }
};
