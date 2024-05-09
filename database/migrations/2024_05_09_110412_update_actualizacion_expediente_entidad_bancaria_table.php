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
            $table->text('codigo_iban')->nullable()->default(null)->after('entidad_bancaria_id');
            $table->text('entidad_financiera')->nullable()->default(null)->after('codigo_iban');
            $table->text('oficina')->nullable()->default(null)->after('entidad_financiera');
            $table->text('digito_control')->nullable()->default(null)->after('oficina');
            $table->text('numero_cuenta')->nullable()->default(null)->after('digito_control');


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
