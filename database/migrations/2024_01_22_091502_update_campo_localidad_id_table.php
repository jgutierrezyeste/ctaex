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
        Schema::rename('localidades_codigos_postales','entidades_codigos_postales');
        Schema::table('entidades_codigos_postales', function (Blueprint $table) {
            $table->renameColumn('localidad_id','entidad_id');
        });
        Schema::table('codigos_postales', function (Blueprint $table) {
            $table->renameColumn('localidad_id','entidad_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('entidades_codigos_postales', function (Blueprint $table) {
            $table->renameColumn('entidad_id','localidad_id');
        });
        Schema::table('codigos_postales', function (Blueprint $table) {
            $table->renameColumn('entidad_id','localidad_id');
        });
        Schema::rename('entidades_codigos_postales','localidades_codigos_postales');
        
    }
};
