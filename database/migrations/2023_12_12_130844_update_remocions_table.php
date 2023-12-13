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
        Schema::table('remocions', function (Blueprint $table) {
            $table->BigInteger('regimen_id')->after('regimen')->nullable()->default(null);
            $table->bigInteger('parentesco_id')->after('a_favor_de')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('remocions', function (Blueprint $table) {
            $table->dropColumn('regimen_id');
            $table->dropColumn('parentesco_id');
        });
    }
};
