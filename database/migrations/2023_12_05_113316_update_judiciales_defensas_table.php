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
        Schema::table('judiciales_defensas', function (Blueprint $table) {
            $table->BigInteger('letrado_id')->after('letrado')->nullable()->default(null);
            $table->BigInteger('juzgado_id')->after('juzgado')->nullable()->default(null);
            $table->BigInteger('motivo_id')->after('motivo')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('judiciales_defensas', function (Blueprint $table) {
            $table->dropColumn('letrado_id');
            $table->dropColumn('juzgado_id');
            $table->dropColumn('motivo_id');
            
        });
    }
};
