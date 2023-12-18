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
        Schema::table('declaracions', function (Blueprint $table) {
            $table->renameColumn('proxima_declaracion','año');
        });
        Schema::rename('declaracions','declaraciones');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('declaraciones','declaracions');
    }
};
