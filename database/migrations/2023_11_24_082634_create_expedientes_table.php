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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->text('expte')->nullable()->default(null);
            $table->integer('ts_asignado')->nullable()->default(null);
            $table->integer('año')->nullable()->default(null);
            $table->text('regimen')->nullable()->default(null);
            $table->text('situacion')->nullable()->default(null);
            $table->text('apellido')->nullable()->default(null);
            $table->text('nombre')->nullable()->default(null);
            $table->date('fecha_nacimiento')->nullable()->default(null);
            $table->text('sexo')->nullable()->default(null);
            
            $table->text('nacionalidad')->nullable()->default(null);
            $table->text('dni')->nullable()->default(null);
            $table->date('caducidad')->nullable()->default(null);
        
            $table->text('documento')->nullable()->default(null);
          
            $table->text('num_documento')->nullable()->default(null);
            $table->text('seg_social')->nullable()->default(null);
            $table->text('otra_asistencia_sanitaria')->nullable()->default(null);
            $table->text('numero_poliza')->nullable()->default(null);
            $table->text('patologia_concreta')->nullable()->default(null);
            $table->text('patologia_general')->nullable()->default(null);
            $table->text('num_incapacidad')->nullable()->default(null);
            $table->text('nig')->nullable()->default(null);
            $table->text('juzgado')->nullable()->default(null);
            $table->text('expte_digital')->nullable()->default(null);
            $table->text('domicilio')->nullable()->default(null);
            $table->text('residencia')->nullable()->default(null);
            $table->text('provincia')->nullable()->default(null);
            $table->text('observaciones_inv')->nullable()->default(null);
            $table->date('inventario')->nullable()->default(null);
            $table->text('aprob_inventario')->nullable()->default(null);
            $table->text('declaracion_anual')->nullable()->default(null);
            $table->text('rendicion')->nullable()->default(null);
            $table->text('ultima_rdc_aprobada')->nullable()->default(null);
            
            $table->date('rendicion_final')->nullable()->default(null);
            $table->date('aprob_rdc_final')->nullable()->default(null);
            $table->text('resolucion_icp')->nullable()->default(null);
            $table->integer('num_resolucion_icp')->nullable()->default(null);
            $table->date('fecha_dictado_icp')->nullable()->default(null);
            $table->text('juzgado_dictado_icp')->nullable()->default(null);
            $table->text('resolucion_nb')->nullable()->default(null);
            $table->integer('num_resolucion_nb')->nullable()->default();
            $table->text('fecha_dictado_nb')->nullable()->default(null);
            $table->text('juzgado_dictado_nb')->nullable()->default(null);
            $table->text('entidadbancaria')->nullable()->default(null);
            $table->text('iban')->nullable()->default(null);
            $table->text('entidadbancaria1')->nullable()->default(null);
            $table->text('iban1')->nullable()->default(null);
            $table->text('entidadbancaria2')->nullable()->default(null);
            $table->text('iban2')->nullable()->default(null);
            $table->text('entidadbancaria3')->nullable()->default(null);
            $table->text('iban3')->nullable()->default(null);
            $table->text('entidadbancaria4')->nullable()->default(null);
            $table->text('iban4')->nullable()->default(null);
            $table->text('entidadbancaria5')->nullable()->default(null);
            $table->text('iban5')->nullable()->default(null);
            $table->text('pension')->nullable()->default(null);
            $table->text('prestaciones')->nullable()->default(null);
            $table->text('importe')->nullable()->default(null);
            $table->text('decesos')->nullable()->default(null);
            $table->text('disponible')->nullable()->default(null);
            $table->text('compañia')->nullable()->default(null);
            $table->text('poliza')->nullable()->default(null);
            $table->text('carpeta')->nullable()->default(null);
            $table->text('observciones_dec')->nullable()->default(null);
            $table->text('grado_discapacidad')->nullable()->default(null);
            $table->date('fecha_discapacidad')->nullable()->default(null);
            $table->date('fecha_valor_discapacidad')->nullable()->default(null);
            $table->text('revisable_definitiva')->nullable()->default(null);
            $table->date('fecha_revision_discpacidad')->nullable()->default(null);
            $table->text('activo_dp')->nullable()->default(null);
            $table->text('grado_dependencia')->nullable()->default(null);
            $table->text('nivel_dependencia')->nullable()->default(null);
            $table->date('fecha_resolucion')->nullable()->default(null);
            $table->date('fecha_efectos')->nullable()->default(null);
            $table->text('servicio_dependencia')->nullable()->default(null);
            $table->text('subtipo_servicio')->nullable()->default(null);
            $table->text('prestacion_dependencia')->nullable()->default(null);
            $table->date('fecha_aceptacion_cargo')->nullable()->default(null);
            $table->date('fecha_entrada_area_aecca')->nullable()->default(null);
            $table->text('empleado_aecca')->nullable()->default(null);
            $table->text('empleado_aecca_rdc')->nullable()->default(null);
            $table->text('empleado_aecca_final')->nullable()->default(null);
            $table->date('fecha_presentacion_rdc')->nullable()->default(null);
            $table->date('fecha_aprobacion_rdc')->nullable()->default(null);
            $table->text('observaciones_rdc')->nullable()->default(null);
            $table->date('fecha_fallecimiento_final')->nullable()->default(null);
            $table->date('fecha_cert_def_final')->nullable()->default(null);
            $table->date('fecha_sol_ult_vol_final')->nullable()->default(null);
            $table->text('observaciones_final')->nullable()->default(null);
            $table->date('fecha_revision_rdc')->nullable()->default(null);
            $table->integer('años_en_ctaex')->nullable()->default();
            $table->text('presentacion_rdc')->nullable()->default(null);
            $table->integer('empleado_ecca_prs_rdc')->nullable()->default(null);
            $table->text('no_por_edad_decesos')->nullable()->default(null);
            $table->text('fecha_remocion')->nullable()->default(null);
            $table->text('fecha_reintegro_capacidad')->nullable()->default(null);
            $table->text('expte_antiguo')->nullable()->default(null);
            $table->text('expte_antes_revison')->nullable()->default(null);
            $table->text('regimen_actual')->nullable()->default(null);
            $table->text('regimen_definitivo')->nullable()->default(null);
            $table->text('iniciador_procedimiento')->nullable()->default(null);
            $table->text('fecha_remision')->nullable()->default(null);

            $table->text('fecha_recepcion')->nullable()->default(null);
            $table->text('contratar')->nullable()->default(null);
            $table->text('anular_poder_notarial')->nullable()->default(null);
            $table->text('uso_armas')->nullable()->default(null);
            $table->text('permiso_conducir')->nullable()->default(null);
            $table->text('estetica')->nullable()->default(null);
            $table->text('certificado_operabilidad')->nullable()->default(null);
            $table->text('otorgar_testamento')->nullable()->default(null);
            $table->text('redes_sociales')->nullable()->default(null);
            $table->string('observaciones_revison',1000)->nullable()->default(null);
            $table->text('procedimiento_judicial')->nullable()->default(null);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
