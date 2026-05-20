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
        Schema::table('representantes', function (Blueprint $table) { 
            $table->text('domicilio')->nullable()->default(null)->after('apellido2');
            $table->text('localidad')->nullable()->default(null)->after('domicilio');
            $table->text('codigo_postal')->nullable()->default(null)->after('localidad');
            $table->text('telefono')->nullable()->default(null)->after('codigo_postal');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('representantes', function (Blueprint $table) { 
            $table->dropColumn('domicilio');
            $table->dropColumn('localidad');
            $table->dropColumn('codigo_postal');
            $table->dropColumn('telefono');            

        });
    }
};
