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
        Schema::table('patologia_concretas', function (Blueprint $table) {
            $table->renameColumn('patologia','nombre');
        });

        Schema::rename('patologia_concretas','patologia_concreta');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patologia_concretas', function (Blueprint $table) {
            $table->renameColumn('nombre','patologia');

        });

        Schema::rename('patologia_concreta','patologia_concretas');
    }
};
