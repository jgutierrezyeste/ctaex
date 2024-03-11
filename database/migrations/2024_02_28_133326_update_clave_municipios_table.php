<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('municipios', function (Blueprint $table) {
            
            
            $table->unsignedBigInteger('provincia_id')->change();
            $table->foreign('provincia_id')->references('id')->on('provincias');
            
        });
    }
};
