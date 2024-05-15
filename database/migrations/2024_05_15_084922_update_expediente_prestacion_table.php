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
        Schema::table('expediente_prestacion', function (Blueprint $table) {
            
            $table->unsignedBigInteger('año_id')->nullable()->default(null)->after('año');

            $table->foreign('año_id')->references('id')->on('años');

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_prestacion', function (Blueprint $table) {
            
            $table->dropForeign('expediente_prestacion_año_id_foreign');
            $table->dropIndex('expediente_prestacion_año_id_foreign');
            $table->dropColumn('año_id');
            
            
        });
    }
};
