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
            $table->string('iban')->after('entidad_bancaria_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expediente_entidad_bancaria', function (Blueprint $table) {
            $table->dropColumn('iban');
        });
    }
};
