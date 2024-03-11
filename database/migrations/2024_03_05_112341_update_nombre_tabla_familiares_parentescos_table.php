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
        Schema::rename('familiares','representantes');
        Schema::rename('parentescos','relaciones');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('representantes','familiares');
        Schema::rename('relaciones','parentescos');
    }
};
