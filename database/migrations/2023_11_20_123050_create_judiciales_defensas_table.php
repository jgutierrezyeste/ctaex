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
        Schema::create('judiciales_defensas', function (Blueprint $table) {
            $table->id();
            $table->string('num_expte',255)->nullable()->default(null);
            $table->string('apellidos',255)->nullable()->default(null);
            $table->string('nombre',255)->nullable()->default(null);
            $table->string('letrado',255)->nullable()->default(null);
            $table->string('juzgado',255)->nullable()->default(null);
            $table->date('fecha_aceptacion')->nullable()->default(null);
            $table->string('fecha_cancelacion',255)->nullable()->default(null);
            $table->string('motivo',255)->nullable()->default(null);
            $table->string('alta_baja',255)->nullable()->default(null);
            $table->string('sexo',255)->nullable()->default(null);
            $table->string('observaciones',600)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('judiciales_defensas');
    }
};
