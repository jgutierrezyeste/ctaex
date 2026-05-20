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
        Schema::table('expediente_datos_personales', function (Blueprint $table) { 
            $table->date('fecha_fallecimiento')->nullable()->default(null)->after('no_por_edad_decesos');
            $table->boolean('is_fallecido')->nullable()->default('0')->after('fecha_fallecimiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_datos_personales', function (Blueprint $table) { 
            $table->dropColumn('fecha_fallecimiento');
            $table->dropColumn('is_fallecido');
                    

        });
    }
};
