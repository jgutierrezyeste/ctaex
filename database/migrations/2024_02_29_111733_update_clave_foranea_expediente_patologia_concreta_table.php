<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up(): void
    {
        Schema::table('expediente_patologia_concreta', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->change();
            $table->foreign('expediente_id')->references('id')->on('expedientes');

            $table->unsignedBigInteger('patologia_concreta_id')->change();
            $table->foreign('patologia_concreta_id')->references('id')->on('patologia_concreta');
            
            
        });
    }
};
