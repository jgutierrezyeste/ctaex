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
        Schema::table('expediente_entidad_bancaria', function (Blueprint $table) {
            $table->text('observaciones')->after('iban')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_entidad_bancaria', function (Blueprint $table) {
            $table->dropColumn('observaciones');
        });
    }
};
