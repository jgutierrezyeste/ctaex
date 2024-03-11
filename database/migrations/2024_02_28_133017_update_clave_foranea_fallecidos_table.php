<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fallecidos', function (Blueprint $table) {
            
            $table->unsignedBigInteger('expediente_id')->after('id')->nullable()->default(null);
            $table->foreign('expediente_id')->references('id')->on('expedientes');

            $table->unsignedBigInteger('regimen_id')->change();
            $table->foreign('regimen_id')->references('id')->on('regimenes');
            
        });
    }
};
