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
        Schema::table('patologia_concreta', function (Blueprint $table) {
            $table->bigInteger('patologia_general_id')->after('nombre')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patologia_concreta', function (Blueprint $table) {
            $table->dropColumn('patologia_general_id');
        });
    }
};
