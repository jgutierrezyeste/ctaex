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
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('domicilio','centro');
            $table->renameColumn('residencia_id','domicilio_id');
            $table->dropColumn('decesos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('centro','domicilio');
            $table->renameColumn('domicilio_id','residencia_id');
            $table->text('decesos')->nullable()->default();
        });
    }
};
