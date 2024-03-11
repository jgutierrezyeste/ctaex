<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('codigos_postales', function (Blueprint $table) {
            
            $table->unsignedBigInteger('entidad_id')->change();
            $table->foreign('entidad_id')->references('id')->on('entidades');

           
        });
    }
};
