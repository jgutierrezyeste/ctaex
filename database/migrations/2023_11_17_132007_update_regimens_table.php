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
        Schema::table('regimens', function (Blueprint $table) {
            $table->renameColumn('alcance','regimen');
            $table->renameColumn('codigo_alcance','codigo_regimen');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('regimens', function (Blueprint $table) {
            $table->renameColumn('regimen','alcance');
            $table->renameColumn('codigo_regimen','codigo_alcance');
        });
    }
};
