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
            $table->renameColumn('ts_asignado','trabajador_social');
            $table->renameColumn('tsasignado_id','trabajador_social_id');
            $table->renameColumn('situacion','estado_expediente');
            $table->renameColumn('situacion_id','estado_expediente_id');
            $table->renameColumn('dni','numero_documento');
            $table->renameColumn('caducidad','fecha_caducidad_documento');
            $table->renameColumn('documento','tipo_documento');
            $table->text('telefono')->after('num_documento')->nullable()->default(null);
            $table->text('telefono2')->after('telefono')->nullable()->default(null);
            $table->text('fax')->after('telefono2')->nullable()->default(null);
            $table->text('correro_electronico')->after('fax')->nullable()->default(null);
            $table->renameColumn('aseguradora_id','seguro_medico_id');
            $table->renameColumn('numero_poliza','numero_seguro_medico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expedientes', function (Blueprint $table) {
            $table->renameColumn('trabajor_social','ts_asignado');
            $table->renameColumn('trabajador_social_id','tsasignado_id');
            $table->renameColumn('estado_expediente','situacion');
            $table->renameColumn('estado_expediente_id','situacion_id');
            $table->renameColumn('numero_documento','dni');
            $table->renameColumn('fecha_caducidad_documento','caducidad');
            $table->renameColumn('tipo_documento','documento');
            $table->dropColumn('telefono');
            $table->dropColumn('telefono2');
            $table->dropColumn('fax');
            $table->dropColumn('correro_electronico');
            $table->renameColumn('seguro_medico_id','aseguradora_id');
            $table->renameColumn('numero_seguro_medico','numero_poliza');
        });
    }
};
