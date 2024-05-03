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
        Schema::table('expedientes_intranet', function (Blueprint $table) {
            
            $table->dropColumn('apellido1');
            $table->dropColumn('apellido');
            $table->dropColumn('nombre');
            $table->dropColumn('apellido2');
            $table->dropColumn('centro');
            $table->dropForeign('expedientes_centro_id_foreign');
            $table->dropIndex('expedientes_centro_id_foreign');
            $table->dropColumn('centro_id');
            $table->dropColumn('fecha_nacimiento');
            $table->dropColumn('sexo');
            $table->dropForeign('expedientes_sexo_id_foreign');
            $table->dropIndex('expedientes_sexo_id_foreign');
            $table->dropColumn('sexo_id');
            $table->dropColumn('nacionalidad');
            $table->dropForeign('expedientes_nacionalidad_id_foreign');
            $table->dropIndex('expedientes_nacionalidad_id_foreign');
            $table->dropColumn('nacionalidad_id');
            $table->dropColumn('numero_documento');
            $table->dropColumn('fecha_caducidad_documento');
            $table->dropColumn('tipo_documento');
            $table->dropForeign('expedientes_documento_identificativo_id_foreign');
            $table->dropIndex('expedientes_documento_identificativo_id_foreign');
            $table->dropColumn('documento_identificativo_id');
            $table->dropColumn('telefono');
            $table->dropColumn('telefono2');
            $table->dropColumn('fax');
            $table->dropColumn('correo_electronico');
            $table->dropColumn('seg_social');
            $table->dropColumn('seguro_medico');
            $table->dropForeign('expedientes_seguro_medico_id_foreign');
            $table->dropIndex('expedientes_seguro_medico_id_foreign');
            $table->dropColumn('seguro_medico_id');
            $table->dropForeign('expedientes_domicilio_id_foreign');
            $table->dropIndex('expedientes_domicilio_id_foreign');
            $table->dropColumn('domicilio_id');
            $table->dropColumn('provincia');
            $table->dropColumn('disponible');
            $table->dropColumn('aseguradora');
            $table->dropForeign('expedientes_aseguradora_id_foreign');
            $table->dropIndex('expedientes_aseguradora_id_foreign');
            $table->dropColumn('aseguradora_id');
            $table->dropColumn('poliza');
            $table->dropColumn('carpeta');
            $table->dropColumn('no_por_edad_decesos');







            
            
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
