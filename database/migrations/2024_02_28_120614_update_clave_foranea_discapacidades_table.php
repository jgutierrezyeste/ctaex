<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('discapacidades', function (Blueprint $table) {
            
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');
            
        });
    }
};
