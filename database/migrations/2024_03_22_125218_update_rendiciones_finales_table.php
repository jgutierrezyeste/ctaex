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
        Schema::table('rendiciones_finales', function (Blueprint $table) {
            
           
            $table->unsignedBigInteger('rendicion_id')->default(null)->nullable()->after('id');
            $table->foreign('rendicion_id')->references('id')->on('rendiciones');
           
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
