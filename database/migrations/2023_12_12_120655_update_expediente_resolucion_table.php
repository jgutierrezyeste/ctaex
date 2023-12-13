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
        Schema::table('expediente_resolucion', function (Blueprint $table) {
            $table->renameColumn('juzgado_dictado','juzgado_dictado_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_resolucion', function (Blueprint $table) {
            $table->renameColumn('juzgado_dictado_id','juzgado_dictado');
        });
    }
};
