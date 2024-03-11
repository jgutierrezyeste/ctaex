<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('domicilios', function (Blueprint $table) {
            
            $table->unsignedBigInteger('tipo_via_id')->after('tipo_via')->nullable()->default(null);
            $table->foreign('tipo_via_id')->references('id')->on('tipos_via');

            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            
            $table->unsignedBigInteger('codigo_postal_id')->change();
            $table->foreign('codigo_postal_id')->references('id')->on('codigos_postales');

            
        });
    }
};
