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
        Schema::table('instruccion_juzgados', function (Blueprint $table) {
            $table->renameColumn('juzgado','nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instruccion_juzgados', function (Blueprint $table) {
            $table->renameColumn('nombre','juzgado');
        });
    }
};
