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
        Schema::table('declaraciones', function (Blueprint $table) {
            
            $table->dropColumn('año');
            $table->unsignedBigInteger('mes_id')->default(null)->nullable()->after('id');
            $table->foreign('mes_id')->references('id')->on('meses');
            $table->unsignedBigInteger('año_id')->default(null)->nullable()->after('mes_id');
            $table->foreign('año_id')->references('id')->on('años');
           
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
