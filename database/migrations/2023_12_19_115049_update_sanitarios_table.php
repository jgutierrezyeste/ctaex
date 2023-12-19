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
        Schema::table('sanitarios', function (Blueprint $table) {
            $table->renameColumn('regimen_sanitario','nombre');
        });
        Schema::rename('sanitarios','seguros_medicos');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sanitarios', function (Blueprint $table) {
            $table->renameColumn('nombre','regimen_sanitario'); 
        });
        Schema::rename('seguros_medicos','sanitarios');

    }
};
