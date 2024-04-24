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
            $table->dropColumn('apellidos');
            $table->dropColumn('nombre');
            $table->dropColumn('letrado');
            $table->dropColumn('juzgado');
            $table->dropColumn('motivo');
            $table->dropColumn('sexo');
	        $table->dropForeign('defensas_judiciales_sexo_id_foreign');
            $table->dropIndex('defensas_judiciales_sexo_id_foreign');
            $table->dropColumn('sexo_id');

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
