<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('patologia_concreta', function (Blueprint $table) {
            
            $table->unsignedBigInteger('patologia_general_id')->change();
            
            $table->foreign('patologia_general_id')->references('id')->on('patologia_general');

            
        });
    }
};
