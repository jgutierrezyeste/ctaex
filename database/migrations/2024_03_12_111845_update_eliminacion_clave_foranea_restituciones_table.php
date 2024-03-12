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
        Schema::table('restituciones', function (Blueprint $table) {
           
            $table->dropForeign('restituciones_año_id_foreign');
            $table->dropIndex('restituciones_año_id_foreign');
            $table->dropColumn('año_id');
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
