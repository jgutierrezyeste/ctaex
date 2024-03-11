<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rendiciones_empleados', function (Blueprint $table) {
            
            $table->unsignedBigInteger('rendicion_id')->change();
            $table->foreign('rendicion_id')->references('id')->on('rendiciones');

            $table->unsignedBigInteger('empleado_id')->change();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            
            
        });
    }
};
