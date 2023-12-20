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
        Schema::create('rendiciones_empleados', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rendicion_id')->nullable()->default(null);
            $table->bigInteger('empleado_id')->nullable()->default(null);
            $table->boolean('is_presenta')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendiciones_empleados');
    }
};
