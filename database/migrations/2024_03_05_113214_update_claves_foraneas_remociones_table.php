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
        Schema::table('remociones', function (Blueprint $table) {
            $table->unsignedbigInteger('expediente_id')->after('expte')->nullable()->default(null);
            $table->foreign('expediente_id')->references('id')->on('expedientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('remociones', function (Blueprint $table) {
           
            $table->dropForeign('remociones_expediente_id_foreign');
            $table->dropIndex('remociones_expediente_id_foreign');
        });
    }
};
