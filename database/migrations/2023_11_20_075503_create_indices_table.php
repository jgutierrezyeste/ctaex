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
        Schema::create('indices', function (Blueprint $table) {
            $table->id();
            $table->string('expte',255)->nullable()->default(null);
            $table->string('apellido1',255)->nullable()->default(null);
            $table->string('apellido2',255)->nullable()->default(null);
            $table->string('nombre',255)->nullable()->default(null);
            $table->string('trabajo',255)->nullable()->default(null);
            $table->string('pendiente',255)->nullable()->default(null);
            $table->date('fecha')->nullable()->default(null);
            $table->string('comparecencias',255)->nullable()->default(null);
            $table->string('observaciones',255)->nullable()->default(null);
            $table->date('dia')->nullable()->default(null);
            $table->time('hora')->nullable()->default(null);
            $table->string('juzgado_instancia',255)->nullable()->default(null);
            $table->string('juzgado_penal',255)->nullable()->default(null);
            $table->string('abogado',255)->nullable()->default(null);
            $table->string('asunto',255)->nullable()->default(null);
            $table->string('representante_ctaex',255)->nullable()->default(null);
            $table->string('pendiente_comp',255)->nullable()->default(null);
            $table->string('cancelada',255)->nullable()->default(null);
            $table->string('aplazada',255)->nullable()->default(null);
            $table->date('nueva_fecha')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indices');
    }
};
