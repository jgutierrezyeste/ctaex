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
            
            $table->dropColumn('apellido1');
            $table->renameColumn('apellido','apellido1');
            $table->dropColumn('sexo');
            $table->dropColumn('tipo_documento');
            $table->dropColumn('seguro_medico');
            $table->dropColumn('provincia');
            $table->dropColumn('aseguradora');
            $table->dropColumn('centro');
            $table->dropColumn('nacionalidad');
    
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
