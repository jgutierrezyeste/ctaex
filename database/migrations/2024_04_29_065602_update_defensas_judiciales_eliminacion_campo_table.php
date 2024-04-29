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
        Schema::table('defensas_judiciales', function (Blueprint $table) {
            
            $table->dropColumn('alta_baja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('defensas_judiciales', function (Blueprint $table) {
           
            $table->text('alta_baja')->nullable()->default(null);
        });
    }
};
