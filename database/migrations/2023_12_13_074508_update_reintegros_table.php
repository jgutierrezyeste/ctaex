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
        Schema::table('reintegros', function (Blueprint $table) {
            $table->BigInteger('juzgado_id')->after('juzgado')->nullable()->default(null);
            $table->BigInteger('figura_id')->after('figura')->nullable()->default(null);
            $table->BigInteger('regimen_id')->after('regimen')->nullable()->default(null);
            $table->BigInteger('año_id')->after('año')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reintegros', function (Blueprint $table) {
            $table->dropColumn('juzgado_id');
            $table->dropColumn('figura_id');
            $table->dropColumn('regimen_id');
            $table->dropColumn('año_id');
        });
    }
};
