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
           
            $table->dropColumn('parentesco_id');
            $table->dropColumn('familiar_id');
            $table->dropColumn('regimen_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('remociones', function (Blueprint $table) {
            $table->unsignedbigInteger('regimen_id')->nullable()->default(null);
            $table->unsignedbigInteger('familiar_id')->nullable()->default(null);
            $table->unsignedbigInteger('parentesco_id')->nullable()->default(null);

        });
    }
};
