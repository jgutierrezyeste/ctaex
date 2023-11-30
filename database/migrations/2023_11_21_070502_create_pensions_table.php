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
        Schema::create('pensions', function (Blueprint $table) {
            $table->id();
            $table->string('expte',255)->nullable()->default(null);;
            $table->string('año_prestacion',255)->nullable()->default(null);;
            $table->string('prestacion',255)->nullable()->default(null);
            $table->string('importe',255)->nullable()->default(0);
            $table->string('año_prestacion2',255)->nullable()->default(null);
            $table->string('prestacion2',255)->nullable()->default(null);
            $table->string('importe2',255)->nullable()->default(0);
            $table->string('año_prestacion3',255)->nullable()->default(null);
            $table->string('prestacion3',255)->nullable()->default(null);
            $table->string('importe3',255)->nullable()->default(0);
            $table->string('total_ingresos',255)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pensions');
    }
};
