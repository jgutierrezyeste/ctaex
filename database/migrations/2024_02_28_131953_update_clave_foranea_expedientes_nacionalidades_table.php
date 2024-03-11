<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('nacionalidad_id')->nullable()->default(null)->change();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            
            
        });
    }
};
